<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\SbcGateway;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiInternalError.
 */
class OpenApiInternalError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = ['error'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field error */
    public array $error;
}
