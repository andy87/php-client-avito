<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\SbcGateway;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiMultiConfirmRequestBody.
 */
class OpenApiMultiConfirmRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dispatches' => 'dispatches', 'expiresAt' => 'expiresAt'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['expiresAt'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Schema field dispatches */
    public ?array $dispatches = null;

    /** @var int|null Дата окончания предложения */
    public ?int $expiresAt = null;
}
