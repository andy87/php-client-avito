<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Order;

use and_y87\php_client_avito\Generated\Prompt\SetOrderRealAddressPrompt as BaseSetOrderRealAddressPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/realAddress.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderRealAddress
 *
 * @property array<string, mixed> $address Body field address
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 */
class SetRealAddressPrompt extends BaseSetOrderRealAddressPrompt
{
}
