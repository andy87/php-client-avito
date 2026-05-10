<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderAcceptReturnOrderResponse.
 */
class OrderAcceptReturnOrderResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Флаг успеха указанного ПВЗ для возврата */
    public ?bool $success = null;
}
