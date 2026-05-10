<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\AccountsHierarchy;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito accounts-hierarchy/OpenApiError.
 */
class OpenApiError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = ['error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field error */
    public array $error;
}
