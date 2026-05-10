<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/SortingCenterGet.
 */
class SortingCenterGet extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['data' => [\php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGetData::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\SortingCenterGetData>|null Schema field data */
    public ?array $data = null;

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
