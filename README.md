# PHP Client for Avito Public API

[Russian documentation](docs/ru/README.md)

Typed PHP client for the Avito Public API. The package provides a main `ApiClientAvito` entry point, generated provider sections, request prompt DTOs, response DTOs, and schema classes.

The client is built on top of `andy87/clients-base` and targets PHP 8.1 or newer.

## Requirements

- PHP 8.1 or newer
- Composer
- Avito application credentials: client ID and client secret

## Installation

Install the package with Composer:

```bash
composer require andy87/php-client-avito
```

The package name is documented from `composer.json`. This README does not assume any specific registry or publication state.

## Quick Start

Create a client from an array and call a generated API method:

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

`ApiClientAvito` exposes provider sections lazily through properties such as `user`, `item`, `messenger`, `autoload`, `deliverySandbox`, and others generated from the Avito OpenAPI specifications.

## Working with Prompts

Generated prompt DTOs are filled through public properties. Create a prompt object first, then assign request values directly to its fields.

Do not pass request data as a constructor array:

```php
<?php

use Andy87\ClientsAvito\Generated\Prompt\VasPricesPrompt;

$prompt = new VasPricesPrompt();
$prompt->itemIds = [123456789, 987654321];

$response = $client->item->vasPrices($prompt);
```

For API methods without parameters, create an empty prompt and pass it to the provider method:

```php
<?php

use Andy87\ClientsAvito\Generated\Prompt\GetUserInfoSelfPrompt;

$prompt = new GetUserInfoSelfPrompt();
$response = $client->user->getUserInfoSelf($prompt);
```

## Configuration

You can pass configuration as an array:

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

You can also use environment variables:

```php
<?php

use Andy87\ClientsAvito\ApiClientAvito;
use Andy87\ClientsAvito\AvitoConfig;

$client = new ApiClientAvito(AvitoConfig::fromEnv());
```

By default, `AvitoConfig::fromEnv()` reads:

- `AVITO_CLIENT_ID`
- `AVITO_CLIENT_SECRET`

For multiple credential sets, pass a suffix:

```php
<?php

use Andy87\ClientsAvito\AvitoConfig;

$config = AvitoConfig::fromEnv(suffix: 'CURIES');
```

This reads `AVITO_CLIENT_ID_CURIES` and `AVITO_CLIENT_SECRET_CURIES`.

## Events and Headers

`ApiClientAvito` supports shared runtime options from `andy87/clients-sdk`: default request headers and event listeners. Runtime state is stored once on the client and is shared with all provider sections, including providers that were already created lazily.

If you use the default HTTP transport, pass runtime options as the second constructor argument:

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

If you pass a custom transport as the second argument, pass runtime options as the fourth argument:

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

You can also change headers and attach listeners after client creation:

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

Available events:

- `ApiClientAvito::EVENT_AFTER_INIT` - fires after client initialization. Event object: `AfterInitEvent` with `$client`.
- `ApiClientAvito::EVENT_BEFORE_REQUEST` - fires before transport sends the request. Event object: `BeforeRequestEvent` with `$provider`, `$prompt`, and mutable `$request`.
- `ApiClientAvito::EVENT_AFTER_REQUEST` - fires after the raw HTTP response is converted to the typed response DTO. Event object: `AfterRequestEvent` with `$provider`, `$prompt`, `$request`, `$httpResponse`, and `$response`.
- `ApiClientAvito::EVENT_REQUEST_EXCEPTION` - fires when transport, response JSON parsing, or response DTO construction throws. Event object: `RequestExceptionEvent` with `$provider`, `$prompt`, nullable `$request`, and `$exception`.

Each event option accepts either one callable or a list of callables:

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

Header names are merged case-insensitively. The request starts with `Accept: application/json`, then client headers are applied, then authorization headers are applied. Authorization headers override default client headers, and `EVENT_BEFORE_REQUEST` listeners can mutate the final `HttpRequest` before it is sent.

HTTP responses with status `400` or higher are still converted into response DTOs and dispatch `EVENT_AFTER_REQUEST`. `EVENT_REQUEST_EXCEPTION` is only for thrown exceptions.

## Providers and Generated API

The root namespace is:

```text
Andy87\ClientsAvito
```

Main classes:

- `Andy87\ClientsAvito\ApiClientAvito` - main client with lazy provider access.
- `Andy87\ClientsAvito\AvitoConfig` - connection configuration.
- `Andy87\ClientsAvito\BaseAvitoProvider` - base provider for generated API sections.

Generated classes are placed under:

- `Andy87\ClientsAvito\Generated\Provider`
- `Andy87\ClientsAvito\Generated\Prompt`
- `Andy87\ClientsAvito\Generated\Response`
- `Andy87\ClientsAvito\Generated\Schema`

You can inspect available top-level provider names at runtime:

```php
<?php

use Andy87\ClientsAvito\ApiClientAvito;

$client = new ApiClientAvito([
    'clientId' => 'your-client-id',
    'clientSecret' => 'your-client-secret',
]);

print_r($client->providerNames());
```

You can access a provider either by property or by name:

```php
<?php

$userProvider = $client->user;
$sameProvider = $client->provider('user');
```

## Errors and Exceptions

The client and generated methods may throw:

- `InvalidArgumentException` when required configuration or prompt data is missing or invalid.
- `RuntimeException` when authorization or an HTTP request fails.
- `UnexpectedValueException` when required successful response fields are missing.
- `OutOfBoundsException` when an unknown provider or operation group is requested.

## License

MIT. See `composer.json` for the package license declaration.
