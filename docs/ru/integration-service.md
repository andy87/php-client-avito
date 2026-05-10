# Интеграционный сервис Avito

Документ показывает один из удобных способов встроить `ApiClientAvito` в приложение без привязки к конкретному framework. Основная идея: generated provider-ы остаются внутри прикладного сервиса, а остальной код приложения вызывает понятные бизнес-методы.

## Общая схема

```text
AvitoConfig -> ApiClientAvito -> AvitoService -> код приложения
```

`ApiClientAvito` отвечает за HTTP-запросы, авторизацию и typed DTO. `AvitoService` отвечает за прикладные методы проекта: подготовку prompt DTO, вызов нужного provider-а и возврат результата в удобном для приложения месте.

## Минимальный пример без framework

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;

$config = AvitoConfig::fromEnv();
$client = new ApiClientAvito($config);
$avitoService = new AvitoService($client);

$userInfo = $avitoService->getUserInfoSelf();

echo $userInfo->id . PHP_EOL;
echo $userInfo->name . PHP_EOL;
```

По умолчанию `AvitoConfig::fromEnv()` читает `AVITO_CLIENT_ID` и `AVITO_CLIENT_SECRET`.

## Пример AvitoService

```php
<?php

declare(strict_types=1);

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;
use and_y87\php_client_avito\Generated\Response\GetUserInfoSelfResponse;

/**
 * Сервис прикладной интеграции с Avito API.
 *
 * Инкапсулирует generated prompt/provider слой клиента и предоставляет
 * приложению доменные методы работы с Avito.
 */
final class AvitoService
{
    /**
     * Создаёт сервис Avito-интеграции.
     *
     * @param ApiClientAvito $apiClientAvito Типизированный клиент Avito API.
     *
     * @return void
     */
    public function __construct(
        private readonly ApiClientAvito $apiClientAvito,
    ) {
    }

    /**
     * Возвращает информацию о текущем пользователе Avito.
     *
     * @return GetUserInfoSelfResponse DTO ответа Avito API.
     *
     * @throws InvalidArgumentException Если DTO запроса невалиден.
     * @throws RuntimeException Если авторизация или HTTP-запрос завершились ошибкой.
     * @throws UnexpectedValueException Если успешный ответ Avito имеет некорректную структуру.
     */
    public function getUserInfoSelf(): GetUserInfoSelfResponse
    {
        return $this->apiClientAvito->user->getUserInfoSelf(new GetUserInfoSelfPrompt());
    }
}
```

Такой сервис удобно регистрировать в DI/container приложения. В ручном PHP его можно создать напрямую:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;

$config = new AvitoConfig(
    clientId: 'your-client-id',
    clientSecret: 'your-client-secret',
);

$client = new ApiClientAvito($config);
$avitoService = new AvitoService($client);
```

## Где хранить настройки

Для локальной разработки часто достаточно env-переменных:

```bash
AVITO_CLIENT_ID=your-client-id
AVITO_CLIENT_SECRET=your-client-secret
```

Для нескольких аккаунтов можно использовать suffix:

```php
<?php

use and_y87\php_client_avito\AvitoConfig;

$mainConfig = AvitoConfig::fromEnv();
$secondConfig = AvitoConfig::fromEnv(suffix: 'SECOND');
```

Во втором случае будут прочитаны `AVITO_CLIENT_ID_SECOND` и `AVITO_CLIENT_SECRET_SECOND`.

В production обычно удобнее брать реквизиты из secret manager, framework config или переменных окружения деплоя. Не размещайте `clientSecret` в публичном репозитории.

## Авторизация client_credentials

Для обычных авторизованных API-вызовов отдельный вызов `/token` не используется. `ApiClientAvito` сам использует `clientId` и `clientSecret` из `AvitoConfig`, получает access token через `client_credentials`, добавляет `Authorization: Bearer ...` и переиспользует token до истечения срока действия.

Обычный вызов выглядит так:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;

$client = new ApiClientAvito(AvitoConfig::fromEnv());

$response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());
```

При ответе `401` дефолтная OAuth-стратегия обновляет token и один раз повторяет исходный запрос.

## Token cache для production

Без внешнего cache token хранится в памяти текущего PHP-процесса. Для CLI-скрипта или короткого worker-а этого может быть достаточно. Для production-приложения с несколькими процессами обычно полезен общий TTL-cache.

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;
use and_y87\PhpClientSdk\Cache\ArrayCache;

$client = new ApiClientAvito(AvitoConfig::fromEnv(), [
    ApiClientAvito::TOKEN_CACHE => new ArrayCache(),
    ApiClientAvito::TOKEN_CACHE_KEY => 'avito:oauth:main',
    ApiClientAvito::TOKEN_CLOCK_SKEW => 60,
]);
```

`ArrayCache` подходит для демонстрации и тестов. Для общего cache между процессами используйте объект, реализующий `and_y87\PhpClientSdk\Contracts\CacheInterface`: Redis adapter, файловый cache, DB-cache, framework-cache или совместимый PSR-16/simple-cache adapter.

## Ручной вызов token endpoint

Ручной вызов `/token` полезен для диагностики, проверки реквизитов или отдельного OAuth-сценария. Для обычных API-запросов этот шаг не вставляется перед каждым вызовом provider-а.

```php
<?php

declare(strict_types=1);

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;
use and_y87\php_client_avito\Generated\Prompt\GetAccessTokenPrompt;

$config = new AvitoConfig(
    clientId: 'your-client-id',
    clientSecret: 'your-client-secret',
);

$client = new ApiClientAvito($config);

$prompt = new GetAccessTokenPrompt();
$prompt->client_id = $config->clientId;
$prompt->client_secret = $config->clientSecret;
$prompt->grant_type = 'client_credentials';

$token = $client->auth->getAccessToken($prompt);

echo $token->access_token . PHP_EOL;
echo $token->token_type . PHP_EOL;
echo $token->expires_in . PHP_EOL;
```

## authorization_code

`authorization_code` - отдельный OAuth-сценарий для действий от лица пользователя. В приложении обычно размещаются redirect flow, обработка `code`, хранение `refresh_token`, привязка token-ов к пользователю и политика обновления.

Для таких сценариев можно использовать generated auth provider-ы или подключить собственную стратегию авторизации через SDK-интерфейсы.

## Типичные ошибки интеграции

- Получать token вручную перед каждым API-запросом.
- Создавать новый `ApiClientAvito` внутри каждого метода сервиса.
- Хранить `clientSecret` в коде приложения или публичном репозитории.
- Разносить generated prompt DTO по контроллерам, handlers и другим слоям приложения.
- Смешивать бизнес-логику приложения с технической подготовкой DTO-запросов.
