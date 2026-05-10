<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\DeliverySandbox\Areas;

use php_client_avito\Generated\Response\AddAreasSandboxResponse as BaseAddAreasSandboxResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/areas.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddAreasSandbox
 *
 * @property array<string, mixed>|null $data Response field data
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class AddSandboxResponse extends BaseAddAreasSandboxResponse
{
}
