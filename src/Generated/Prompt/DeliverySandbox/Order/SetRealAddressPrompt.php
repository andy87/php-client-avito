<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Order;

use Andy87\ClientsAvito\Generated\Prompt\SetOrderRealAddressPrompt as BaseSetOrderRealAddressPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/realAddress.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderRealAddress
 * 
 * @property array<string, mixed> $address Body field address
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 */
class SetRealAddressPrompt extends BaseSetOrderRealAddressPrompt
{
}
