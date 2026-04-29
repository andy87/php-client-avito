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

## OpenAPI Generation

Generated API classes are produced by the project generator:

```bash
composer generate
```

The Composer script runs:

```bash
node tools/generate-avito-openapi.mjs
```

The generator loads Avito OpenAPI metadata and writes generated providers, prompts, responses, schemas, and the provider registry into `src/Generated`.

## Errors and Exceptions

The client and generated methods may throw:

- `InvalidArgumentException` when required configuration or prompt data is missing or invalid.
- `RuntimeException` when authorization or an HTTP request fails.
- `UnexpectedValueException` when required successful response fields are missing.
- `OutOfBoundsException` when an unknown provider or operation group is requested.

## License

MIT. See `composer.json` for the package license declaration.
