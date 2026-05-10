<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\OrderManagement\Orders;

use and_y87\php_client_avito\Generated\Response\GetOrdersResponse as BaseGetOrdersResponse;

/**
 * Ответ Avito API [GET] /order-management/1/orders.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getOrders
 *
 * @property bool $hasMore Есть ли еще заказы
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Order> $orders Массив заказов
 */
class GetResponse extends BaseGetOrdersResponse
{
}
