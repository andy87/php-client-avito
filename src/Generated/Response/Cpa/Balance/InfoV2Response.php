<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Cpa\Balance;

use php_client_avito\Generated\Response\BalanceInfoV2Response as BaseBalanceInfoV2Response;

/**
 * Ответ Avito API [POST] /cpa/v2/balanceInfo.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/balanceInfoV2
 *
 * @property int|null $advance Response field advance
 * @property int|null $balance Response field balance
 * @property int|null $debt Response field debt
 * @property \php_client_avito\Generated\Schema\Cpa\CpaError|null $errorData Response field error
 */
class InfoV2Response extends BaseBalanceInfoV2Response
{
}
