<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Parcels;

use Andy87\ClientsAvito\Generated\Response\ChangeParcelsResponse as BaseChangeParcelsResponse;

/**
 * Ответ Avito API [POST] /sandbox/changeParcels.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcels
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null $errorData Response field error
 */
class ChangeResponse extends BaseChangeParcelsResponse
{
}
