<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoteka\Report;

use Andy87\ClientsAvito\Generated\Response\GetReportListResponse as BaseGetReportListResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/reports/list/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReportList
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportItemAutoteka> $result Response field result
 */
class GetListResponse extends BaseGetReportListResponse
{
}
