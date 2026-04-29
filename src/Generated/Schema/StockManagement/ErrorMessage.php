<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\StockManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito stock-management/errorMessage.
 */
class ErrorMessage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message'];

    protected const REQUIRED_FIELDS = ['message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текст ошибки */
    public string $message;
}
