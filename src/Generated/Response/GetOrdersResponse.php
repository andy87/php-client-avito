<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /order-management/1/orders.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getOrders
 */
class GetOrdersResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['hasMore' => 'hasMore', 'orders' => 'orders'];

    protected const REQUIRED_FIELDS = ['orders', 'hasMore'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orders' => [\php_client_avito\Generated\Schema\OrderManagement\Order::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\OrderManagement\OrdersInfo::class;

    /** @var bool Есть ли еще заказы */
    public bool $hasMore;

    /** @var array<int, \php_client_avito\Generated\Schema\OrderManagement\Order> Массив заказов */
    public array $orders;
}
