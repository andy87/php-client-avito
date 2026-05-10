<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\V;

use php_client_avito\Generated\Response\V1CancelParcelResponse as BaseV1CancelParcelResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/v1/cancelParcel.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/v1CancelParcel
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelError|null $errorData Response field error
 */
class CancelParcelResponse extends BaseV1CancelParcelResponse
{
}
