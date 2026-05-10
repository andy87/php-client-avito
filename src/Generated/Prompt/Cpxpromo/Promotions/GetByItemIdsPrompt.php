<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Cpxpromo\Promotions;

use php_client_avito\Generated\Prompt\GetPromotionsByItemIdsPrompt as BaseGetPromotionsByItemIdsPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/getPromotionsByItemIds.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getPromotionsByItemIds
 *
 * @property array<int, int> $itemIDs Body field itemIDs
 */
class GetByItemIdsPrompt extends BaseGetPromotionsByItemIdsPrompt
{
}
