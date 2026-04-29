<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\Courier;

use Andy87\ClientsAvito\Generated\Response\GetCourierDeliveryRangeResponse as BaseGetCourierDeliveryRangeResponse;

/**
 * Ответ Avito API [GET] /order-management/1/order/getCourierDeliveryRange.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getCourierDeliveryRange
 * 
 * @property array<string, mixed> $result Данные для отображения виджета подтверждения заказа продавцом
 * @property string $status Response field status
 */
class GetDeliveryRangeResponse extends BaseGetCourierDeliveryRangeResponse
{
}
