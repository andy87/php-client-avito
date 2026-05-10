<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Parcel;

use php_client_avito\Generated\Response\CreateParcelResponse as BaseCreateParcelResponse;

/**
 * Ответ Avito API [POST] /createParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/createParcel
 *
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelData|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelError|null $errorData Response field error
 */
class CreateResponse extends BaseCreateParcelResponse
{
}
