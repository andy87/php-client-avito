<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Calls;

use Andy87\ClientsAvito\Generated\Prompt\PostCallsStatsPrompt as BasePostCallsStatsPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{user_id}/calls/stats/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/postCallsStats
 * 
 * @property string $dateFrom Начальная дата периода (YYYY-MM-DD)
 * @property string $dateTo Конечная дата периода (YYYY-MM-DD)
 * @property array<int, int>|null $itemIds Идентификаторы объявлений
 */
class PostStatsPrompt extends BasePostCallsStatsPrompt
{
}
