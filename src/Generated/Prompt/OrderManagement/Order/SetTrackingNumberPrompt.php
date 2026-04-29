<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\OrderManagement\Order;

use Andy87\ClientsAvito\Generated\Prompt\SetOrderTrackingNumberPrompt as BaseSetOrderTrackingNumberPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/order/setTrackingNumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setOrderTrackingNumber
 * 
 * @property string $Authorization Токен для авторизации
 * @property string|null $orderId ID заказа в Авито
 * @property string|null $trackingNumber Трек-номер посылки
 */
class SetTrackingNumberPrompt extends BaseSetOrderTrackingNumberPrompt
{
}
