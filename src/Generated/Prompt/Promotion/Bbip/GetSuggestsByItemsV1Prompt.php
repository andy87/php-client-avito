<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Promotion\Bbip;

use Andy87\ClientsAvito\Generated\Prompt\GetBbipSuggestsByItemsV1Prompt as BaseGetBbipSuggestsByItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/bbip/suggests/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_bbip_suggests_by_items_v1
 * 
 * @property array<int, int>|null $itemIds Идентификаторы объявлений
 */
class GetSuggestsByItemsV1Prompt extends BaseGetBbipSuggestsByItemsV1Prompt
{
}
