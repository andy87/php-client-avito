<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Terms;

use Andy87\ClientsAvito\Generated\Response\UpdateTermsResponse as BaseUpdateTermsResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terms.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/UpdateTerms
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class UpdateResponse extends BaseUpdateTermsResponse
{
}
