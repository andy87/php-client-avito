# PHP-клиент для Avito Public API

[English documentation](../../README.md)

Типизированный PHP-клиент для Avito Public API. Пакет предоставляет главный клиент `ApiClientAvito`, сгенерированные provider-разделы, DTO запросов, DTO ответов и schema-классы.

Клиент построен на базе `andy87/php-client-sdk` и рассчитан на PHP 8.1 или новее.

## Требования

- PHP 8.1 или новее
- Composer
- Реквизиты приложения Avito: client ID и client secret

## Установка

Установите пакет через Composer:

```bash
composer require andy87/php-client-avito:^0.9.1
```

Релиз `v0.9.1` опубликован на Packagist как `andy87/php-client-avito`.

## Совместимость

Версия `v0.9.1` рассчитана на PHP 8.1 или новее и требует `andy87/php-client-sdk:v0.7.0`.
Composer устанавливает SDK-зависимость автоматически при установке пакета.

## Быстрый старт

Создайте клиент из массива и вызовите сгенерированный метод API:

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;

$client = new ApiClientAvito([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
]);

$prompt = new GetUserInfoSelfPrompt();
$response = $client->user->getUserInfoSelf($prompt);

echo $response->id . PHP_EOL;
echo $response->name . PHP_EOL;
```

`ApiClientAvito` лениво открывает provider-разделы через свойства: `user`, `item`, `messenger`, `autoload`, `deliverySandbox` и другие разделы, сгенерированные из OpenAPI-спецификаций Avito.

## Дополнительная документация

- [Интеграционный сервис](integration-service.md) - framework-agnostic пример `AvitoService`, constructor injection, настройка `ApiClientAvito`, client credentials авторизация и token cache.

## Работа с prompts

Сгенерированные prompt DTO заполняются через публичные свойства. Сначала создайте объект prompt, затем присвойте значения нужным полям напрямую.

Не передавайте данные запроса массивом в конструктор:

```php
<?php

use and_y87\php_client_avito\Generated\Prompt\VasPricesPrompt;

$prompt = new VasPricesPrompt();
$prompt->itemIds = [123456789, 987654321];

$response = $client->item->vasPrices($prompt);
```

Для методов API без параметров создайте пустой prompt и передайте его в метод provider-раздела:

```php
<?php

use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;

$prompt = new GetUserInfoSelfPrompt();
$response = $client->user->getUserInfoSelf($prompt);
```

## Конфигурация

Конфигурацию можно передать массивом:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito([
    'client_id' => 'your-client-id',
    'client_secret' => 'your-client-secret',
    'base_url' => 'https://api.avito.ru',
    'token_url' => 'https://api.avito.ru/token',
    'timeout' => 30,
]);
```

Если API URL нужно собрать из частей, используйте `protocol`, `host` и `prefix`. Явный `baseUrl` сохраняет приоритет:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
    'protocol' => 'https',
    'host' => 'api.avito.ru',
    'prefix' => 'openapi',
]);
```

Также можно использовать переменные окружения:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;

$client = new ApiClientAvito(AvitoConfig::fromEnv());
```

По умолчанию `AvitoConfig::fromEnv()` читает:

- `AVITO_CLIENT_ID`
- `AVITO_CLIENT_SECRET`

Для нескольких наборов реквизитов передайте суффикс:

```php
<?php

use and_y87\php_client_avito\AvitoConfig;

$config = AvitoConfig::fromEnv(suffix: 'CURIES');
```

В этом случае будут прочитаны `AVITO_CLIENT_ID_CURIES` и `AVITO_CLIENT_SECRET_CURIES`.

## Зоны ответственности

Пакет берёт на себя технический слой работы с Avito API:

- получение access token для `client_credentials`;
- добавление заголовка `Authorization: Bearer ...`;
- кеширование token в памяти PHP-процесса;
- подключение внешнего token cache через `CacheInterface`;
- refresh/retry исходного запроса после `401`;
- замену стратегии авторизации через SDK-интерфейсы.

На стороне приложения обычно остаётся прикладная интеграция:

- хранение `clientId` и `clientSecret` в env, secret manager или конфигурации framework;
- регистрация `ApiClientAvito` и прикладного сервиса в DI/container;
- выбор внешнего token cache для production-нагрузки;
- бизнес-методы поверх generated provider-ов;
- сценарии `authorization_code`, включая redirect, code, refresh token и хранение пользовательских token-ов.

## OAuth token

`ApiClientAvito` автоматически использует client credentials для авторизованных generated API-вызовов. Отдельно вызывать `/token` перед каждым обычным API-запросом не требуется.

Ручной вызов token endpoint полезен для диагностики, проверки реквизитов или специфичных OAuth-сценариев:

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

## События и заголовки

`ApiClientAvito` поддерживает общие runtime-options из `andy87/php-client-sdk`: дефолтные заголовки запросов и обработчики событий. Runtime-состояние хранится один раз на клиенте и используется всеми provider-разделами, включая уже созданные лениво provider-ы.

Если используется дефолтный HTTP-транспорт, runtime-options можно передать вторым аргументом конструктора:

```php
<?php

declare(strict_types=1);

use and_y87\PhpClientSdk\Client\Event\BeforeRequestEvent;
use and_y87\PhpClientSdk\Client\Event\AfterRequestEvent;
use and_y87\PhpClientSdk\Client\Event\RequestExceptionEvent;
use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
], [
    ApiClientAvito::HEADERS => [
        'X-Client' => 'crm',
    ],
    ApiClientAvito::EVENTS => [
        ApiClientAvito::EVENT_BEFORE_REQUEST => static function (BeforeRequestEvent $event): void {
            $event->request->headers['X-Trace-Id'] = bin2hex(random_bytes(8));
        },
        ApiClientAvito::EVENT_AFTER_REQUEST => static function (AfterRequestEvent $event): void {
            error_log((string) $event->httpResponse->statusCode);
        },
        ApiClientAvito::EVENT_REQUEST_EXCEPTION => static function (RequestExceptionEvent $event): void {
            error_log($event->exception->getMessage());
        },
    ],
]);
```

Если кастомный транспорт передан вторым аргументом, runtime-options нужно передавать четвёртым аргументом:

```php
<?php

declare(strict_types=1);

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\PhpClientSdk\Contracts\Http\HttpTransportInterface;

/** @var HttpTransportInterface $transport */
$client = new ApiClientAvito(
    [
        'clientId' => 'your-client-id',
        'clientSecret' => 'your-client-secret',
    ],
    $transport,
    null,
    [
        ApiClientAvito::HEADERS => [
            'X-Client' => 'crm',
        ],
    ],
);
```

Заголовки и listeners можно менять после создания клиента:

```php
<?php

declare(strict_types=1);

use and_y87\PhpClientSdk\Client\Event\BeforeRequestEvent;
use and_y87\php_client_avito\ApiClientAvito;

/** @var ApiClientAvito $client */
$client
    ->addHeaders(['X-Account' => 'main'])
    ->on(ApiClientAvito::EVENT_BEFORE_REQUEST, static function (BeforeRequestEvent $event): void {
        $event->request->headers['X-Request-Source'] = 'worker';
    });

$headers = $client->getHeaders();
$client->setHeaders(['X-Account' => 'secondary']);
```

Доступные события:

- `ApiClientAvito::EVENT_AFTER_INIT` - вызывается после инициализации клиента. Объект события: `AfterInitEvent` с `$client`.
- `ApiClientAvito::EVENT_BEFORE_REQUEST` - вызывается перед отправкой запроса транспортом. Объект события: `BeforeRequestEvent` с `$provider`, `$prompt` и mutable `$request`.
- `ApiClientAvito::EVENT_AFTER_REQUEST` - вызывается после преобразования raw HTTP-ответа в типизированный response DTO. Объект события: `AfterRequestEvent` с `$provider`, `$prompt`, `$request`, `$httpResponse` и `$response`.
- `ApiClientAvito::EVENT_REQUEST_EXCEPTION` - вызывается, если транспорт, JSON-разбор ответа или создание response DTO выбросили исключение. Объект события: `RequestExceptionEvent` с `$provider`, `$prompt`, nullable `$request` и `$exception`.

Каждая event-option принимает один callable или список callable:

```php
<?php

declare(strict_types=1);

use and_y87\PhpClientSdk\Client\Event\BeforeRequestEvent;
use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito($config, [
    ApiClientAvito::EVENTS => [
        ApiClientAvito::EVENT_BEFORE_REQUEST => [
            static function (BeforeRequestEvent $event): void {
                $event->request->headers['X-Trace-Id'] = bin2hex(random_bytes(8));
            },
            static function (BeforeRequestEvent $event): void {
                $event->request->query['debug'] = '1';
            },
        ],
    ],
]);
```

Имена заголовков объединяются без учёта регистра. Запрос начинает с `Accept: application/json`, затем применяются заголовки клиента, затем заголовки авторизации. Заголовки авторизации перекрывают дефолтные заголовки клиента, а listeners `EVENT_BEFORE_REQUEST` могут изменить финальный `HttpRequest` перед отправкой.

HTTP-ответы со статусом `400` и выше всё равно преобразуются в response DTO и вызывают `EVENT_AFTER_REQUEST`. `EVENT_REQUEST_EXCEPTION` предназначен только для выброшенных исключений.

## Options авторизации и диагностики

`ClientCredentialsAuthorizationStrategy` по умолчанию обновляет token и один раз повторяет исходный API-запрос после `401`. Список refresh-статусов можно переопределить или отключить:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito($config, [
    ApiClientAvito::REFRESH_AUTHORIZATION_STATUS_CODES => [401],
]);

$clientWithoutRefreshRetry = new ApiClientAvito($config, [
    ApiClientAvito::REFRESH_AUTHORIZATION_STATUS_CODES => [],
]);
```

Чтобы дефолтная OAuth-стратегия хранила token во внешнем TTL-хранилище, передайте SDK `CacheInterface` через options. Это не привязывает Avito-клиент к Redis, Yii2, Symfony или другому фреймворку:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\PhpClientSdk\Transport\Cache\ArrayCache;

$client = new ApiClientAvito($config, [
    ApiClientAvito::TOKEN_CACHE => new ArrayCache(),
    ApiClientAvito::TOKEN_CACHE_KEY => 'avito:oauth:client-id',
    ApiClientAvito::TOKEN_CLOCK_SKEW => 60,
]);
```

Для Redis, файлового кеша, БД или framework-cache используйте любой объект, реализующий `and_y87\PhpClientSdk\Contracts\Cache\CacheInterface`, либо адаптер из SDK, если ваше хранилище совместимо с PSR-16/simple-cache.

Используйте `authorizationResolver`, когда generated prompt требует отдельную стратегию авторизации:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\ApiKeyAuthorizationStrategy;
use and_y87\PhpClientSdk\Security\Authorization\Resolver\PromptClassAuthorizationStrategyResolver;

$client = new ApiClientAvito($config, [
    ApiClientAvito::AUTHORIZATION_RESOLVER => new PromptClassAuthorizationStrategyResolver([
        GetUserInfoSelfPrompt::class => new ApiKeyAuthorizationStrategy('X-Api-Key', 'secret'),
    ]),
]);
```

Включите `TraceableTransport` через `traceableTransport => true`, чтобы смотреть запросы и ответы:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;

$client = new ApiClientAvito($config, [
    ApiClientAvito::TRACEABLE_TRANSPORT => true,
]);

$response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());
$lastRecord = $client->getTraceableTransport()?->getLastRecord();
```

## Mock-тестирование

Сгенерированные prompts можно мокать по классу через `andy87/php-client-sdk`. Так тесты не зависят от группировки сгенерированных URL:

```php
<?php

declare(strict_types=1);

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;
use and_y87\PhpClientSdk\Security\Authorization\Strategy\NullAuthorizationStrategy;
use and_y87\PhpClientSdk\Testing\Mock\MockTransport;
use and_y87\PhpClientSdk\Testing\Mock\PromptClassMockResponseResolver;

$resolver = (new PromptClassMockResponseResolver())
    ->addJson(GetUserInfoSelfPrompt::class, [
        'id' => 123,
        'name' => 'Mock User',
    ]);

$client = new ApiClientAvito(
    [
        'clientId' => 'test-client-id',
        'clientSecret' => 'test-client-secret',
        'baseUrl' => 'https://api.avito.test',
    ],
    new MockTransport($resolver),
    new NullAuthorizationStrategy(),
);

$response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());
```

## Providers и сгенерированный API

Корневой namespace:

```text
and_y87\php_client_avito
```

Основные классы:

- `and_y87\php_client_avito\ApiClientAvito` - главный клиент с ленивым доступом к provider-разделам.
- `and_y87\php_client_avito\AvitoConfig` - конфигурация подключения.
- `and_y87\php_client_avito\BaseAvitoProvider` - базовый provider для сгенерированных разделов API.

Сгенерированные классы находятся в:

- `and_y87\php_client_avito\Generated\Provider`
- `and_y87\php_client_avito\Generated\Prompt`
- `and_y87\php_client_avito\Generated\Response`
- `and_y87\php_client_avito\Generated\Schema`

Список доступных provider-разделов можно получить во время выполнения:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;

$client = new ApiClientAvito([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
]);

print_r($client->providerNames());
```

Provider можно получить через свойство или по имени:

```php
<?php

$userProvider = $client->user;
$sameProvider = $client->provider('user');
```

## Ошибки и исключения

Клиент и сгенерированные методы могут выбрасывать:

- `InvalidArgumentException`, если обязательные настройки или данные prompt отсутствуют либо некорректны.
- `RuntimeException`, если авторизация или HTTP-запрос завершились ошибкой.
- `UnexpectedValueException`, если в успешном ответе отсутствуют обязательные поля.
- `OutOfBoundsException`, если запрошен неизвестный provider или неизвестная группа операций.

## Лицензия

MIT. Декларация лицензии указана в `composer.json`.
