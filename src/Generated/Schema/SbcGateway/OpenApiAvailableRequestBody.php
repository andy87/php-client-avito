<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\SbcGateway;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiAvailableRequestBody.
 */
class OpenApiAvailableRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, int> список id объявлений */
    public array $itemIds;
}
