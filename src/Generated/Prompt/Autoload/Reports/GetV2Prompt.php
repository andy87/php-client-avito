<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoload\Reports;

use Andy87\ClientsAvito\Generated\Prompt\GetReportsV2Prompt as BaseGetReportsV2Prompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportsV2
 * 
 * @property int|null $per_page Количество отчётов на странице: целое число больше 0 и меньше или равно 200.
 * @property int|null $page Номер страницы: целое число больше или равно 0.
 * @property string|null $date_from Фильтр по дате создания отчёта «от» (от такой-то даты). Формат значения: RFC3339
 * @property string|null $date_to Фильтр по дате создания отчёта «до» (до такой-то даты). Формат значения: RFC3339
 * @property string $Authorization Токен для авторизации
 */
class GetV2Prompt extends BaseGetReportsV2Prompt
{
}
