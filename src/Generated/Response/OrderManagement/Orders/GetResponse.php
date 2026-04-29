<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\Orders;

use Andy87\ClientsAvito\Generated\Response\GetOrdersResponse as BaseGetOrdersResponse;

/**
 * Ответ Avito API [GET] /order-management/1/orders.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getOrders
 * 
 * @property bool $hasMore Есть ли еще заказы
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Order> $orders Массив заказов
 */
class GetResponse extends BaseGetOrdersResponse
{
}
