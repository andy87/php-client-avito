<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Trxpromo\Api;

use Andy87\ClientsAvito\Generated\Prompt\ApiTrxPromoOpenApiApplyPrompt as BaseApiTrxPromoOpenApiApplyPrompt;

/**
 * Класс данных запроса Avito API [POST] /trx-promo/1/apply.
 * 
 * @documentation https://developers.avito.ru/api-catalog/trxpromo/documentation#operation/api_trx_promo_open_api_apply
 * 
 * @property string|null $x_oauth_scopes Список зон доступа
 * @property string $x_oauth_flow Выбранный флоу авторизации по протоколу OAuth 2.0
 * @property string $x_authenticated_userid Avito-ID пользователя
 * @property array<int, array<string, mixed>> $items Body field items
 */
class TrxPromoOpenApiApplyPrompt extends BaseApiTrxPromoOpenApiApplyPrompt
{
}
