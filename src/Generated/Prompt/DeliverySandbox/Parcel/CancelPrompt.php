<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Parcel;

use php_client_avito\Generated\Prompt\CancelParcelPrompt as BaseCancelParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/cancelParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/cancelParcel
 *
 * @property string $actor Кто отменяет посылку
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $parcelID Body field parcelID
 */
class CancelPrompt extends BaseCancelParcelPrompt
{
}
