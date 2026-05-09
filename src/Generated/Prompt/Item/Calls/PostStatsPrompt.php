<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Calls;

use Andy87\ClientsAvito\Generated\Prompt\PostCallsStatsPrompt as BasePostCallsStatsPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{user_id}/calls/stats/.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/postCallsStats
 *
 * @property int $user_id Номер пользователя в Личном кабинете Авито
 * @property string $Content_Type Тип данных запроса
 * @property string $dateFrom Начальная дата периода (YYYY-MM-DD)
 * @property string $dateTo Конечная дата периода (YYYY-MM-DD)
 * @property array<int, int>|null $itemIds Идентификаторы объявлений
 */
class PostStatsPrompt extends BasePostCallsStatsPrompt
{
}
