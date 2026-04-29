<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\DeliverySandbox\Terminals;

use Andy87\ClientsAvito\Generated\Response\AddTerminalsSandboxResponse as BaseAddTerminalsSandboxResponse;

/**
 * Ответ Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terminals.
 * 
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTerminalsSandbox
 * 
 * @property array<string, mixed>|null $data Response field data
 * @property \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryError|null $errorData Response field error
 */
class AddSandboxResponse extends BaseAddTerminalsSandboxResponse
{
}
