<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['result' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\ReportItemAutoteka::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\GetReportsListResponseDataAutoteka::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportItemAutoteka> Response field result */
    public array $result;
}
