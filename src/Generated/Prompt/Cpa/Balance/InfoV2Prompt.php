<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Balance;

use Andy87\ClientsAvito\Generated\Prompt\BalanceInfoV2Prompt as BaseBalanceInfoV2Prompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v2/balanceInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV2
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property string|null $body Request body
 */
class InfoV2Prompt extends BaseBalanceInfoV2Prompt
{
}
