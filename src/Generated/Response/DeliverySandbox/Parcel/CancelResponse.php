<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Parcel;

use php_client_avito\Generated\Response\CancelParcelResponse as BaseCancelParcelResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/cancelParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/cancelParcel
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class CancelResponse extends BaseCancelParcelResponse
{
}
