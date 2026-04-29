<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\V;

use Andy87\ClientsAvito\Generated\Response\V1getRegisteredParcelIDResponse as BaseV1getRegisteredParcelIDResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/getRegisteredParcelID.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1getRegisteredParcelID
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\GetRegisteredParcelIDError|null $errorData Response field error
 */
class GetRegisteredParcelIDResponse extends BaseV1getRegisteredParcelIDResponse
{
}
