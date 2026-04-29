<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Trxpromo\Api;

use Andy87\ClientsAvito\Generated\Prompt\ApiTrxPromoOpenApiCommissionsPrompt as BaseApiTrxPromoOpenApiCommissionsPrompt;

/**
 * Класс данных запроса Avito API [GET] /trx-promo/1/commissions.
 * 
 * @documentation https://developers.avito.ru/api-catalog/trxpromo/documentation#operation/api_trx_promo_open_api_commissions
 * 
 * @property string|null $x_oauth_scopes Список зон доступа
 * @property string $x_oauth_flow Выбранный флоу авторизации по протоколу OAuth 2.0
 * @property string $x_authenticated_userid Avito-ID пользователя
 * @property array<int, int> $itemIDs Body field itemIDs
 */
class TrxPromoOpenApiCommissionsPrompt extends BaseApiTrxPromoOpenApiCommissionsPrompt
{
}
