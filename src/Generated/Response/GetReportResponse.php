<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['result' => \php_client_avito\Generated\Schema\Autoteka\GetReportResultAsync::class];

    protected const MODEL = \php_client_avito\Generated\Schema\Autoteka\GetReportAsync::class;

    /** @var \php_client_avito\Generated\Schema\Autoteka\GetReportResultAsync|null Response field result */
    public ?\php_client_avito\Generated\Schema\Autoteka\GetReportResultAsync $result = null;
}
