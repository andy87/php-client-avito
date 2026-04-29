<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoload\Report;

use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsFeesByIdPrompt as BaseGetReportItemsFeesByIdPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/{report_id}/items/fees.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsFeesById
 * 
 * @property int $report_id Идентификатор отчёта (ID)
 * @property int|null $per_page Количество объявлений на странице: целое число больше 0 и меньше или равно 200
 * @property int|null $page Номер страницы: целое число больше или равно 0
 * @property string|null $ad_ids Фильтр по ID объявления. Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id), перечисленными через «,» или «|».
 * @property string|null $avito_ids Фильтр по AvitoID объявления. Формат значения: строка с идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 */
class GetItemsFeesByIdPrompt extends BaseGetReportItemsFeesByIdPrompt
{
}
