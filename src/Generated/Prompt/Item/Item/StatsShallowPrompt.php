<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Item\Item;

use php_client_avito\Generated\Prompt\ItemStatsShallowPrompt as BaseItemStatsShallowPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v1/accounts/{user_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemStatsShallow
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property \php_client_avito\Generated\Schema\Item\StatisticsDateFrom $dateFrom Body field dateFrom
 * @property \php_client_avito\Generated\Schema\Item\StatisticsDateTo $dateTo Body field dateTo
 * @property \php_client_avito\Generated\Schema\Item\StatisticsFields|null $fields Body field fields
 * @property \php_client_avito\Generated\Schema\Item\StatisticsItemIDs $itemIds Body field itemIds
 * @property \php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping|null $periodGrouping Body field periodGrouping
 */
class StatsShallowPrompt extends BaseItemStatsShallowPrompt
{
}
