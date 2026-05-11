<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v2/reports/{report_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportByIdV2
 */
class GetReportByIdV2Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v2/reports/{report_id}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['report_id' => 'report_id'];

    protected const REQUIRED_FIELDS = ['report_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['report_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;
}
