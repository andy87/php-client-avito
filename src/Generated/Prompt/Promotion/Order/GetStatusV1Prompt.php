<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Promotion\Order;

use Andy87\ClientsAvito\Generated\Prompt\GetOrderStatusV1Prompt as BaseGetOrderStatusV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/orders/status.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_order_status_v1
 * 
 * @property string|null $orderId Идентификатор заявки на подключение услуг продвижения
 */
class GetStatusV1Prompt extends BaseGetOrderStatusV1Prompt
{
}
