<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\OrderManagement\Order;

use and_y87\php_client_avito\Generated\Prompt\SetOrderTrackingNumberPrompt as BaseSetOrderTrackingNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/setTrackingNumber.
 *
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setOrderTrackingNumber
 *
 * @property string|null $orderId ID заказа в Авито
 * @property string|null $trackingNumber Трек-номер посылки
 */
class SetTrackingNumberPrompt extends BaseSetOrderTrackingNumberPrompt
{
}
