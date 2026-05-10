<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoteka\Report;

use php_client_avito\Generated\Response\GetReportListResponse as BaseGetReportListResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/reports/list/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReportList
 *
 * @property array<int, \php_client_avito\Generated\Schema\Autoteka\ReportItemAutoteka> $result Response field result
 */
class GetListResponse extends BaseGetReportListResponse
{
}
