# PHP-клиент для Avito Public API

[English documentation](../../README.md)

Типизированный PHP-клиент для Avito Public API. Пакет предоставляет главный клиент `ApiClientAvito`, сгенерированные provider-разделы, DTO запросов, DTO ответов и schema-классы.

Клиент построен на базе `andy87/clients-base` и рассчитан на PHP 8.1 или новее.

## Требования

- PHP 8.1 или новее
- Composer
- Реквизиты приложения Avito: client ID и client secret

## Установка

Установите пакет через Composer:

```bash
composer require andy87/php-client-avito
```

Имя пакета взято из `composer.json`. Документация не утверждает конкретное состояние публикации пакета в реестрах.

## Быстрый старт

Создайте клиент из массива и вызовите сгенерированный метод API:

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsAvito\Generated\Prompt\GetUserInfoSelfPrompt;

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

## Работа с prompts

Сгенерированные prompt DTO заполняются через публичные свойства. Сначала создайте объект prompt, затем присвойте значения нужным полям напрямую.

Не передавайте данные запроса массивом в конструктор:

```php
<?php

use Andy87\ClientsAvito\Generated\Prompt\VasPricesPrompt;

$prompt = new VasPricesPrompt();
$prompt->itemIds = [123456789, 987654321];

$response = $client->item->vasPrices($prompt);
```

Для методов API без параметров создайте пустой prompt и передайте его в метод provider-раздела:

```php
<?php

use Andy87\ClientsAvito\Generated\Prompt\GetUserInfoSelfPrompt;

$prompt = new GetUserInfoSelfPrompt();
$response = $client->user->getUserInfoSelf($prompt);
```

## Конфигурация

Конфигурацию можно передать массивом:

```php
<?php

use Andy87\ClientsAvito\ApiClientAvito;

$client = new ApiClientAvito([
    'client_id' => 'your-client-id',
    'client_secret' => 'your-client-secret',
    'base_url' => 'https://api.avito.ru',
    'token_url' => 'https://api.avito.ru/token',
    'timeout' => 30,
]);
```

Также можно использовать переменные окружения:

```php
<?php

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsAvito\AvitoConfig;

$client = new ApiClientAvito(AvitoConfig::fromEnv());
```

По умолчанию `AvitoConfig::fromEnv()` читает:

- `AVITO_CLIENT_ID`
- `AVITO_CLIENT_SECRET`

Для нескольких наборов реквизитов передайте суффикс:

```php
<?php

use Andy87\ClientsAvito\AvitoConfig;

$config = AvitoConfig::fromEnv(suffix: 'CURIES');
```

В этом случае будут прочитаны `AVITO_CLIENT_ID_CURIES` и `AVITO_CLIENT_SECRET_CURIES`.

## События и заголовки

`ApiClientAvito` поддерживает общие runtime-options из `andy87/clients-sdk`: дефолтные заголовки запросов и обработчики событий. Runtime-состояние хранится один раз на клиенте и используется всеми provider-разделами, включая уже созданные лениво provider-ы.

Если используется дефолтный HTTP-транспорт, runtime-options можно передать вторым аргументом конструктора:

```php
<?php

declare(strict_types=1);

use Andy87\ClientsBase\Event\BeforeRequestEvent;
use Andy87\ClientsBase\Event\AfterRequestEvent;
use Andy87\ClientsBase\Event\RequestExceptionEvent;
use Andy87\ClientsAvito\ApiClientAvito;

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

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsBase\Contracts\HttpTransportInterface;

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

use Andy87\ClientsBase\Event\BeforeRequestEvent;
use Andy87\ClientsAvito\ApiClientAvito;

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

use Andy87\ClientsBase\Event\BeforeRequestEvent;
use Andy87\ClientsAvito\ApiClientAvito;

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

## Providers и сгенерированный API

Корневой namespace:

```text
Andy87\ClientsAvito
```

Основные классы:

- `Andy87\ClientsAvito\ApiClientAvito` - главный клиент с ленивым доступом к provider-разделам.
- `Andy87\ClientsAvito\AvitoConfig` - конфигурация подключения.
- `Andy87\ClientsAvito\BaseAvitoProvider` - базовый provider для сгенерированных разделов API.

Сгенерированные классы находятся в:

- `Andy87\ClientsAvito\Generated\Provider`
- `Andy87\ClientsAvito\Generated\Prompt`
- `Andy87\ClientsAvito\Generated\Response`
- `Andy87\ClientsAvito\Generated\Schema`

Список доступных provider-разделов можно получить во время выполнения:

```php
<?php

use Andy87\ClientsAvito\ApiClientAvito;

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
