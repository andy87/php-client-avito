<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelError.
 */
class CreateParcelError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код ошибки.

- `VALIDATION_ERROR` – ошибка валидации данных (например, длина передаваемого поля превышает допустимые лимиты, или какое-то поле отсутствует). 
В поле `error.message` должно содержаться пояснение, какое поле не прошло валидацию.
- `UNSUPPORTED_PARAM_ERROR` – в запросе получен неподдерживаемый параметр. В поле `error.message` должно содержаться пояснение, какое поле не поддерживается.
- `TERMINAL_UNAVAILABLE` – терминал, указанный в запросе, недоступен для создания посылки. В поле `error.message` должно содержаться пояснение причины недоступности терминала.
- `SORTING_CENTER_UNAVAILABLE` – сортировочный центр, указанный в запросе, недоступен для создания посылки. В поле error.message должно содержаться пояснение причины недоступности сортировочного центра.

Все перечисленные ошибки – "терминальные". 
При получении этих ошибок Avito не будет выполнять повторные запросы, т.к. повтор приведет к тому же результату.

Список в дальнейшем может пополняться.
 */
    public string $code;

    /** @var string Текстовое описание ошибки */
    public string $message;
}
