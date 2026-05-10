<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Str\Intervals;

use and_y87\php_client_avito\Generated\Prompt\PutIntervalsPrompt as BasePutIntervalsPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/items/intervals.
 *
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/putIntervals
 *
 * @property bool|null $skip_error Флаг, с которым вместо ошибок(если ошибка произошла с айтемом) возвращается 200 статус, без ошибки
 * @property array<int, array<string, mixed>>|null $intervals Список интервалов для выбранного объявления
 * @property int|null $item_id ID объявления
 * @property string|null $source Название PMS системы
 */
class PutPrompt extends BasePutIntervalsPrompt
{
}
