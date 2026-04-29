<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\General;

use Andy87\ClientsAvito\Generated\Response\TrackingResponse as BaseTrackingResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/tracking.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/tracking
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class TrackingResponse extends BaseTrackingResponse
{
}
