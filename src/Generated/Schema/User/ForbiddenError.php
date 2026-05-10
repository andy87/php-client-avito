<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\User;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito user/forbiddenError.
 */
class ForbiddenError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
