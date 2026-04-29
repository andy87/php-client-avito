<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Item\Item;

use Andy87\ClientsAvito\Generated\Response\ItemStatsShallowResponse as BaseItemStatsShallowResponse;

/**
 * Ответ Avito API [POST] /stats/v1/accounts/{user_id}/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemStatsShallow
 * 
 * @property array<string, mixed>|null $errors Response field errors
 * @property array<string, mixed>|null $result Статистические счетчики объявления
 */
class StatsShallowResponse extends BaseItemStatsShallowResponse
{
}
