<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/reports/list/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReportList
 */
class GetReportListResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportItemAutoteka::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportsListResponseDataAutoteka::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportItemAutoteka> Response field result */
    public array $result;
}
