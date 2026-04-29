<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpxpromo\Promotions;

use Andy87\ClientsAvito\Generated\Prompt\GetPromotionsByItemIdsPrompt as BaseGetPromotionsByItemIdsPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpxpromo/1/getPromotionsByItemIds.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpxpromo/documentation#operation/getPromotionsByItemIds
 * 
 * @property string $Authorization Токен для авторизации
 * @property array<int, int> $itemIDs Body field itemIDs
 */
class GetByItemIdsPrompt extends BaseGetPromotionsByItemIdsPrompt
{
}
