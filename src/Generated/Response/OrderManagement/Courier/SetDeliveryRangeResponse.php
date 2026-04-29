<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\Courier;

use Andy87\ClientsAvito\Generated\Response\SetCourierDeliveryRangeResponse as BaseSetCourierDeliveryRangeResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/setCourierDeliveryRange.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setCourierDeliveryRange
 * 
 * @property bool|null $success Флаг успеха выбора времени приезда курьера
 */
class SetDeliveryRangeResponse extends BaseSetCourierDeliveryRangeResponse
{
}
