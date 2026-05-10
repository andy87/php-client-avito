<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Auction;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito auction/error.
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
