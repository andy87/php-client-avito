<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/error.
 */
class Error extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['message', 'code'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Код ошибки */
    public int $code;

    /** @var string Текст ошибки */
    public string $message;
}
