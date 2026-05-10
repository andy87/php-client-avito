<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Cpxpromo;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpxpromo/error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текст ошибки */
    public string $message;
}
