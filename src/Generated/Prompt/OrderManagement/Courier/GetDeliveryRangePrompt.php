<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Courier;

use Andy87\ClientsAvito\Generated\Prompt\GetCourierDeliveryRangePrompt as BaseGetCourierDeliveryRangePrompt;

/**
 * Класс данных запроса Avito API [GET] /order-management/1/order/getCourierDeliveryRange.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/getCourierDeliveryRange
 * 
 * @property string $Authorization Токен для авторизации
 * @property string $orderId ID заказа
 * @property string|null $address Адрес продавца
 */
class GetDeliveryRangePrompt extends BaseGetCourierDeliveryRangePrompt
{
}
