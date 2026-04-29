<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Item;

use Andy87\ClientsAvito\Generated\Prompt\ItemStatsShallowPrompt as BaseItemStatsShallowPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v1/accounts/{user_id}/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemStatsShallow
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom $dateFrom Body field dateFrom
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo $dateTo Body field dateTo
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields|null $fields Body field fields
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs $itemIds Body field itemIds
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping|null $periodGrouping Body field periodGrouping
 */
class StatsShallowPrompt extends BaseItemStatsShallowPrompt
{
}
