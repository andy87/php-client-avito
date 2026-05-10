<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderCNCSetDetailsResponse.
 */
class OrderCNCSetDetailsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field result */
    public ?array $result = null;

    /** @var string|null Schema field status */
    public ?string $status = null;
}
