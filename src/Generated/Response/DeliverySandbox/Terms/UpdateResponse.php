<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Terms;

use php_client_avito\Generated\Response\UpdateTermsResponse as BaseUpdateTermsResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terms.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/UpdateTerms
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class UpdateResponse extends BaseUpdateTermsResponse
{
}
