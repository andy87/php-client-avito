<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\OrderManagement;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/ordersInfo.
 */
class OrdersInfo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hasMore' => 'hasMore', 'orders' => 'orders'];

    protected const REQUIRED_FIELDS = ['orders', 'hasMore'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orders' => [\php_client_avito\Generated\Schema\OrderManagement\Order::class]];

    /** @var bool Есть ли еще заказы */
    public bool $hasMore;

    /** @var array<int, \php_client_avito\Generated\Schema\OrderManagement\Order> Массив заказов */
    public array $orders;
}
