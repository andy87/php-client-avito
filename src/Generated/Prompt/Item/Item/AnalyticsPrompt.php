<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Item;

use Andy87\ClientsAvito\Generated\Prompt\ItemAnalyticsPrompt as BaseItemAnalyticsPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v2/accounts/{user_id}/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemAnalytics
 * 
 * @property string $dateFrom Дата (в формате YYYY-MM-DD), с которой (включительно) надо получить статистику
 * @property string $dateTo Дата (в формате YYYY-MM-DD), по которую (включительно) надо получить статистику
 * @property array<string, mixed>|null $filter Набор ограничений, по которым нужно отфильтровать данные
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\Groupings $grouping Body field grouping
 * @property int|null $limit Инструмент пагинации для ограничения количества сущностей в response;
 * @property array<int, string> $metrics Набор доступных показателей, которые должны присутствовать в ответе
 * @property int|null $offset инструмент пагинации или смещение, с которого начинается выборка данных;
 * @property array<string, mixed>|null $sort Сортировка по заданному показателю
 */
class AnalyticsPrompt extends BaseItemAnalyticsPrompt
{
}
