<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Item\Item;

use and_y87\php_client_avito\Generated\Prompt\ItemStatsShallowPrompt as BaseItemStatsShallowPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v1/accounts/{user_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemStatsShallow
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom $dateFrom Body field dateFrom
 * @property \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo $dateTo Body field dateTo
 * @property \and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields|null $fields Body field fields
 * @property \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs $itemIds Body field itemIds
 * @property \and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping|null $periodGrouping Body field periodGrouping
 */
class StatsShallowPrompt extends BaseItemStatsShallowPrompt
{
}
