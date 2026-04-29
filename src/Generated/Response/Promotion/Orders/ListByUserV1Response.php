<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Orders;

use Andy87\ClientsAvito\Generated\Response\ListOrdersByUserV1Response as BaseListOrdersByUserV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/orders/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/list_orders_by_user_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderBrief> $orders Список заявок на подключение услуг продвижения по объявлениям
 * @property array<string, mixed> $pagination Данные для постраничного чтения
 */
class ListByUserV1Response extends BaseListOrdersByUserV1Response
{
}
