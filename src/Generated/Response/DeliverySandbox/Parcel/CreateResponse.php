<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Parcel;

use Andy87\ClientsAvito\Generated\Response\CreateParcelResponse as BaseCreateParcelResponse;

/**
 * Ответ Avito API [POST] /createParcel.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelData|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelError|null $errorData Response field error
 */
class CreateResponse extends BaseCreateParcelResponse
{
}
