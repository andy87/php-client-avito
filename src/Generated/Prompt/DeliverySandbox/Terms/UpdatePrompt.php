<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\DeliverySandbox\Terms;

use php_client_avito\Generated\Prompt\UpdateTermsPrompt as BaseUpdateTermsPrompt;

/**
 * Класс данных запроса Avito API [POST] /delivery-sandbox/tariffs/{tariff_id}/terms.
 *
 * @documentation https://developers.avito.ru/api-catalog/delivery-sandbox/documentation#operation/UpdateTerms
 *
 * @property int $tariff_id id тарифа, к которому должны быть прикреплены добавляемые области
 * @property \php_client_avito\Generated\Schema\DeliverySandbox\UpdateTermsRequest $body Request body
 */
class UpdatePrompt extends BaseUpdateTermsPrompt
{
}
