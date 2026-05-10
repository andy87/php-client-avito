<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1getRegisteredParcelIDResponse as BaseV1getRegisteredParcelIDResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getRegisteredParcelID.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getRegisteredParcelID
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDError|null $errorData Response field error
 */
class GetRegisteredParcelIDResponse extends BaseV1getRegisteredParcelIDResponse
{
}
