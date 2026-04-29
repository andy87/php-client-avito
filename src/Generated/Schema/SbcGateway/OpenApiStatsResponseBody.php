<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\SbcGateway;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiStatsResponseBody.
 */
class OpenApiStatsResponseBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['stats' => 'stats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Schema field stats */
    public ?array $stats = null;
}
