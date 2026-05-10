<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Order;

use php_client_avito\Generated\Response\SetOrderPropertiesResponse as BaseSetOrderPropertiesResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/properties.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderProperties
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class SetPropertiesResponse extends BaseSetOrderPropertiesResponse
{
}
