<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\DeliverySandbox\Parcel;

use Andy87\ClientsAvito\Generated\Prompt\CancelParcelPrompt as BaseCancelParcelPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/cancelParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/cancelParcel
 * 
 * @property string $actor Кто отменяет посылку
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $parcelID Body field parcelID
 */
class CancelPrompt extends BaseCancelParcelPrompt
{
}
