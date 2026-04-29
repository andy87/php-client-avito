<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getOrders.
 */
class GetOrdersResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['hasMore' => 'hasMore', 'orders' => 'orders'];

    protected const REQUIRED_FIELDS = ['orders', 'hasMore'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orders' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Order::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrdersInfo::class;

    /** @var bool Есть ли еще заказы */
    public bool $hasMore;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Order> Массив заказов */
    public array $orders;
}
