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

$response = $client->user->getUserInfoSelf(new GetUserInfoSelfPrompt());

echo $response->id . PHP_EOL;
echo $response->name . PHP_EOL;
```

`ApiClientAvito` лениво открывает provider-разделы через свойства: `user`, `item`, `messenger`, `autoload`, `deliverySandbox` и другие разделы, сгенерированные из OpenAPI-спецификаций Avito.

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

## Генерация из OpenAPI

Сгенерированные классы API создаются проектным генератором:

```bash
composer generate
```

Composer-скрипт запускает:

```bash
node tools/generate-avito-openapi.mjs
```

Генератор загружает OpenAPI-метаданные Avito и записывает provider-классы, prompts, responses, schemas и registry provider-разделов в `src/Generated`.

## Ошибки и исключения

Клиент и сгенерированные методы могут выбрасывать:

- `InvalidArgumentException`, если обязательные настройки или данные prompt отсутствуют либо некорректны.
- `RuntimeException`, если авторизация или HTTP-запрос завершились ошибкой.
- `UnexpectedValueException`, если в успешном ответе отсутствуют обязательные поля.
- `OutOfBoundsException`, если запрошен неизвестный provider или неизвестная группа операций.

## Лицензия

MIT. Декларация лицензии указана в `composer.json`.
