<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/tooManyRequestsError.
 */
class TooManyRequestsError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
