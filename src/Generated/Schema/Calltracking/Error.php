<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Calltracking;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito calltracking/Error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Внутренний код ошибки Возможные значения: 0 - нет ошибки 1000 - пустой запрос 1001 - ошибка валидации 1002 - ошибка авторизации 1003 - внутренняя ошибка 1004 - не найдено
 */
    public int $code;

    /** @var string Schema field message */
    public string $message;
}
