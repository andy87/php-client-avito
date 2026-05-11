# PHP Client for Avito Public API

[Russian documentation](docs/ru/README.md)

Typed PHP client for the Avito Public API. The package provides a main `ApiClientAvito` entry point, generated provider sections, request prompt DTOs, response DTOs, and schema classes.

The client is built on top of `andy87/php-client-sdk` and targets PHP 8.1 or newer.

## Requirements

- PHP 8.1 or newer
- Composer
- Avito application credentials: client ID and client secret

## Installation

Install the package with Composer:

```bash
composer require andy87/php-client-avito:^0.9.2
```

Release `v0.9.2` is published on Packagist as `andy87/php-client-avito`.

## Compatibility

Version `v0.9.2` targets PHP 8.1 or newer and requires `andy87/php-client-sdk:v0.7.0`.
Composer resolves the SDK dependency automatically when the package is installed.

## Quick Start

Create a client from an array and call a generated API method:

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

`ApiClientAvito` exposes provider sections lazily through properties such as `user`, `item`, `messenger`, `autoload`, `deliverySandbox`, and others generated from the Avito OpenAPI specifications.

## Additional Documentation

- [Integration service example](docs/ru/integration-service.md) - framework-agnostic `AvitoService`, constructor injection, `ApiClientAvito` setup, client credentials authorization, and token cache configuration.

## Working with Prompts

Generated prompt DTOs are filled through public properties. Create a prompt object first, then assign request values directly to its fields.

Do not pass request data as a constructor array:

```php
<?php

use and_y87\php_client_avito\Generated\Prompt\VasPricesPrompt;

$prompt = new VasPricesPrompt();
$prompt->itemIds = [123456789, 987654321];

$response = $client->item->vasPrices($prompt);
```

For API methods without parameters, create an empty prompt and pass it to the provider method:

```php
<?php

use and_y87\php_client_avito\Generated\Prompt\GetUserInfoSelfPrompt;

$prompt = new GetUserInfoSelfPrompt();
$response = $client->user->getUserInfoSelf($prompt);
```

## Configuration

You can pass configuration as an array:

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

If you need to compose the API URL from parts, use `protocol`, `host` and `prefix`. An explicit `baseUrl` still has priority:

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

You can also use environment variables:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;
use and_y87\php_client_avito\AvitoConfig;

$client = new ApiClientAvito(AvitoConfig::fromEnv());
```

By default, `AvitoConfig::fromEnv()` reads:

- `AVITO_CLIENT_ID`
- `AVITO_CLIENT_SECRET`

For multiple credential sets, pass a suffix:

```php
<?php

use and_y87\php_client_avito\AvitoConfig;

$config = AvitoConfig::fromEnv(suffix: 'CURIES');
```

This reads `AVITO_CLIENT_ID_CURIES` and `AVITO_CLIENT_SECRET_CURIES`.

## Responsibility Boundaries

The package handles the technical Avito API client layer:

- requesting an access token for `client_credentials`;
- adding the `Authorization: Bearer ...` header;
- caching the token in the current PHP process;
- connecting an external token cache through `CacheInterface`;
- refreshing authorization and retrying the original request after `401`;
- replacing the authorization strategy through SDK interfaces.

The application usually owns the integration layer around the client:

- storing `clientId` and `clientSecret` in environment variables, a secret manager, or framework configuration;
- registering `ApiClientAvito` and an application service in DI/container;
- choosing an external token cache for production workloads;
- implementing business methods over generated providers;
- handling `authorization_code` flows, including redirect, code, refresh token, and per-user token storage.

## OAuth Token

`ApiClientAvito` uses client credentials automatically for authorized generated API calls. You do not need to call `/token` manually before each regular API request.

Manual token endpoint calls are useful for diagnostics, credential checks, or specific OAuth scenarios:

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

## Events and Headers

`ApiClientAvito` supports shared runtime options from `andy87/php-client-sdk`: default request headers and event listeners. Runtime state is stored once on the client and is shared with all provider sections, including providers that were already created lazily.

If you use the default HTTP transport, pass runtime options as the second constructor argument:

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

If you pass a custom transport as the second argument, pass runtime options as the fourth argument:

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

You can also change headers and attach listeners after client creation:

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

Available events:

- `ApiClientAvito::EVENT_AFTER_INIT` - fires after client initialization. Event object: `AfterInitEvent` with `$client`.
- `ApiClientAvito::EVENT_BEFORE_REQUEST` - fires before transport sends the request. Event object: `BeforeRequestEvent` with `$provider`, `$prompt`, and mutable `$request`.
- `ApiClientAvito::EVENT_AFTER_REQUEST` - fires after the raw HTTP response is converted to the typed response DTO. Event object: `AfterRequestEvent` with `$provider`, `$prompt`, `$request`, `$httpResponse`, and `$response`.
- `ApiClientAvito::EVENT_REQUEST_EXCEPTION` - fires when transport, response JSON parsing, or response DTO construction throws. Event object: `RequestExceptionEvent` with `$provider`, `$prompt`, nullable `$request`, and `$exception`.

Each event option accepts either one callable or a list of callables:

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

Header names are merged case-insensitively. The request starts with `Accept: application/json`, then client headers are applied, then authorization headers are applied. Authorization headers override default client headers, and `EVENT_BEFORE_REQUEST` listeners can mutate the final `HttpRequest` before it is sent.

HTTP responses with status `400` or higher are still converted into response DTOs and dispatch `EVENT_AFTER_REQUEST`. `EVENT_REQUEST_EXCEPTION` is only for thrown exceptions.

## Authorization and Diagnostics Options

`ClientCredentialsAuthorizationStrategy` refreshes the token and retries the original API request once after `401` by default. You can override or disable refresh statuses:

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

Pass an SDK `CacheInterface` through options when the default OAuth strategy must store tokens in an external TTL store. This keeps the Avito client independent from Redis, Yii2, Symfony or any other framework:

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

For Redis, file cache, DB cache or framework cache, use any object implementing `and_y87\PhpClientSdk\Contracts\Cache\CacheInterface`, or the SDK adapter when the storage is PSR-16/simple-cache compatible.

Use `authorizationResolver` when a generated prompt needs a different auth strategy:

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

Enable `TraceableTransport` with `traceableTransport => true` to inspect requests and responses:

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

## Mock Testing

Generated prompts can be mocked by class through `andy87/php-client-sdk`. This keeps tests independent from generated URL grouping:

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

## Providers and Generated API

The root namespace is:

```text
and_y87\php_client_avito
```

Main classes:

- `and_y87\php_client_avito\ApiClientAvito` - main client with lazy provider access.
- `and_y87\php_client_avito\AvitoConfig` - connection configuration.
- `and_y87\php_client_avito\BaseAvitoProvider` - base provider for generated API sections.

Generated classes are placed under:

- `and_y87\php_client_avito\Generated\Provider`
- `and_y87\php_client_avito\Generated\Prompt`
- `and_y87\php_client_avito\Generated\Response`
- `and_y87\php_client_avito\Generated\Schema`

You can inspect available top-level provider names at runtime:

```php
<?php

use and_y87\php_client_avito\ApiClientAvito;

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
