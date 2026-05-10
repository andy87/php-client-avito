<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\OrderManagement\Courier;

use and_y87\php_client_avito\Generated\Response\GetCourierDeliveryRangeResponse as BaseGetCourierDeliveryRangeResponse;

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
