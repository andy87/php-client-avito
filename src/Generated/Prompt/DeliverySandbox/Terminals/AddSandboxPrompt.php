<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Terminals;

use and_y87\php_client_avito\Generated\Prompt\AddTerminalsSandboxPrompt as BaseAddTerminalsSandboxPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terminals.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddTerminalsSandbox
 *
 * @property int $tariff_id id тарифа, к которому должны быть прикреплены добавляемые терминалы
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddTerminalsRequest $body Request body
 */
class AddSandboxPrompt extends BaseAddTerminalsSandboxPrompt
{
}
