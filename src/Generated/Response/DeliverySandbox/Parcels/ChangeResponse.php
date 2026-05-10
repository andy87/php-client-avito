<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Parcels;

use php_client_avito\Generated\Response\ChangeParcelsResponse as BaseChangeParcelsResponse;

/**
 * Ответ Avito API [POST] /sandbox/changeParcels.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/ChangeParcels
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null $errorData Response field error
 */
class ChangeResponse extends BaseChangeParcelsResponse
{
}
