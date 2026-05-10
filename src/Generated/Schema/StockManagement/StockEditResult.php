<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\StockManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito stock-management/stockEditResult.
 */
class StockEditResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['stocks' => 'stocks'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Schema field stocks */
    public ?array $stocks = null;
}
