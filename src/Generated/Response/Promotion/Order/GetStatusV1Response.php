<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Promotion\Order;

use Andy87\ClientsAvito\Generated\Response\GetOrderStatusV1Response as BaseGetOrderStatusV1Response;

/**
 * Ответ Avito API [POST] /promotion/v1/items/services/orders/status.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_order_status_v1
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\ErrorByItemV1>|null $errors Информация об ошибках получения данных по объявлениям
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatusByItemV1>|null $items Статус заявки на подключение услуги по объявлениям
 * @property string|null $orderId Идентификатор заявки на подключение услуг продвижения
 * @property \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderStatus|null $status Response field status
 * @property int|null $totalPrice Общая стоимость заявки (в копейках)
 */
class GetStatusV1Response extends BaseGetOrderStatusV1Response
{
}
