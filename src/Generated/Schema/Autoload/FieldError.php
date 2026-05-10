<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/FieldError.
 */
class FieldError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код ошибки */
    public string $code;

    /** @var string Описание ошибки */
    public string $message;
}
