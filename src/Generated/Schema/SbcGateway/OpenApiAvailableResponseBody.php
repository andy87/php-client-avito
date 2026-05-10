<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\SbcGateway;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito sbc-gateway/openApiAvailableResponseBody.
 */
class OpenApiAvailableResponseBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список объявлений и признаков доступности для них услуги */
    public ?array $items = null;
}
