<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\DeliverySandbox\General;

use and_y87\php_client_avito\Generated\Response\TrackingResponse as BaseTrackingResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/order/tracking.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/tracking
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class TrackingResponse extends BaseTrackingResponse
{
}
