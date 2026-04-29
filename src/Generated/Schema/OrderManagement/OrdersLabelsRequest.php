<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/ordersLabelsRequest.
 */
class OrdersLabelsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderIDs' => 'orderIDs'];

    protected const REQUIRED_FIELDS = ['orderIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string> ID заказов в сервисе сделок (marketplace) */
    public array $orderIDs;
}
