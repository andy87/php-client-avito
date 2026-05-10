<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\DeliverySandbox\Areas;

use and_y87\php_client_avito\Generated\Prompt\AddAreasSandboxPrompt as BaseAddAreasSandboxPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/areas.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/AddAreasSandbox
 *
 * @property int $tariff_id id тарифа, к которому должны быть прикреплены добавляемые области
 * @property \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\AddAreasRequest $body Request body
 */
class AddSandboxPrompt extends BaseAddAreasSandboxPrompt
{
}
