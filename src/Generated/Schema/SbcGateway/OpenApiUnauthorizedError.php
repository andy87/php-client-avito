<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\SbcGateway;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiUnauthorizedError.
 */
class OpenApiUnauthorizedError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = ['error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field error */
    public array $error;
}
