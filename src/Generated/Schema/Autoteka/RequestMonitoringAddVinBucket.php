<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestMonitoringAddVinBucket.
 */
class RequestMonitoringAddVinBucket extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null Набор VIN-номеров для дальнейшего заполнения реестра */
    public ?array $data = null;
}
