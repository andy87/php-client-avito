<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Order;

use and_y87\php_client_avito\Generated\Prompt\SetOrderPropertiesPrompt as BaseSetOrderPropertiesPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/order/properties.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderProperties
 *
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams $properties Body field properties
 */
class SetPropertiesPrompt extends BaseSetOrderPropertiesPrompt
{
}
