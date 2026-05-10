<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Order;

use php_client_avito\Generated\Prompt\ProhibitOrderAcceptancePrompt as BaseProhibitOrderAcceptancePrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/prohibitOrderAcceptance.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/prohibitOrderAcceptance
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId Body field orderId
 */
class ProhibitAcceptancePrompt extends BaseProhibitOrderAcceptancePrompt
{
}
