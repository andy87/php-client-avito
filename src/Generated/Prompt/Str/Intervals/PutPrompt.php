<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Str\Intervals;

use Andy87\ClientsAvito\Generated\Prompt\PutIntervalsPrompt as BasePutIntervalsPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/items/intervals.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putIntervals
 * 
 * @property array<int, array<string, mixed>>|null $intervals Список интервалов для выбранного объявления
 * @property int|null $item_id ID объявления
 * @property string|null $source Название PMS системы
 */
class PutPrompt extends BasePutIntervalsPrompt
{
}
