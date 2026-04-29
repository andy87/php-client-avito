<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Order;

use Andy87\ClientsAvito\Generated\Prompt\SetOrderPropertiesPrompt as BaseSetOrderPropertiesPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/properties.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderProperties
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams $properties Body field properties
 */
class SetPropertiesPrompt extends BaseSetOrderPropertiesPrompt
{
}
