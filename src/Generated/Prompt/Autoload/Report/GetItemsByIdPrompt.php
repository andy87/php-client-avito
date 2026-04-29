<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoload\Report;

use Andy87\ClientsAvito\Generated\Prompt\GetReportItemsByIdPrompt as BaseGetReportItemsByIdPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/{report_id}/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsById
 * 
 * @property int $report_id Идентификатор отчёта (ID)
 * @property int|null $per_page Количество объявлений на странице: целое число больше 0 и меньше или равно 200
 * @property int|null $page Номер страницы: целое число больше или равно 0
 * @property string|null $query Фильтр по ID объявления. Формат значения: строка с [идентификаторами объявлений из файла](https://autoload.avito.ru/format/realty/#Id) или идентификаторами объявлений на Авито, перечисленными через «,» или «|».
 * @property string|null $sections Фильтр объявлений по разделам. Формат значения: строка с идентификаторами разделов, перечисленными через «,» или «|». Получить список разделов для конкретного отчёта можно с помощью метода [Статистика по конкретной выгрузке](https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV3).
 */
class GetItemsByIdPrompt extends BaseGetReportItemsByIdPrompt
{
}
