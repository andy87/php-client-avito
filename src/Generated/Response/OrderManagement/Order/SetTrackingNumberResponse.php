<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\OrderManagement\Order;

use Andy87\ClientsAvito\Generated\Response\SetOrderTrackingNumberResponse as BaseSetOrderTrackingNumberResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/setTrackingNumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setOrderTrackingNumber
 * 
 * @property array<string, mixed>|null $errorData Response field error
 * @property bool|null $success Флаг успеха обновления
 */
class SetTrackingNumberResponse extends BaseSetOrderTrackingNumberResponse
{
}
