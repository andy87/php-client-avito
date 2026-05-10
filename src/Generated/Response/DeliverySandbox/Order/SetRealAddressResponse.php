<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\DeliverySandbox\Order;

use and_y87\php_client_avito\Generated\Response\SetOrderRealAddressResponse as BaseSetOrderRealAddressResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/realAddress.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/setOrderRealAddress
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class SetRealAddressResponse extends BaseSetOrderRealAddressResponse
{
}
