<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Order;

use Andy87\ClientsAvito\Generated\Response\ProhibitOrderAcceptanceResponse as BaseProhibitOrderAcceptanceResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/prohibitOrderAcceptance.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/prohibitOrderAcceptance
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class ProhibitAcceptanceResponse extends BaseProhibitOrderAcceptanceResponse
{
}
