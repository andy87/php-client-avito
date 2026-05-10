<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Ratings;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewError.
 */
class ReviewError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'message' => 'message'];

    protected const REQUIRED_FIELDS = ['code', 'message'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код ошибки */
    public string $code;

    /** @var string Текст ошибки */
    public string $message;
}
