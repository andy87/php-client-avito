<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/reports/{report_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getReport
 */
class GetReportResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResultAsync::class];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportAsync::class;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResultAsync|null Response field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResultAsync $result = null;
}
