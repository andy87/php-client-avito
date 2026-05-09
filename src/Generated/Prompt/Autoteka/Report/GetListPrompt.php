<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Report;

use Andy87\ClientsAvito\Generated\Prompt\GetReportListPrompt as BaseGetReportListPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoteka/v1/reports/list/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReportList
 *
 * @property int|null $lastReportId Идентификатор отчета для получения данных постранично.
 * @property int|null $limit Количество отчетов в результате
 * @property string|null $vin Фильтр по VIN или номеру кузова
 */
class GetListPrompt extends BaseGetReportListPrompt
{
}
