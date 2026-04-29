<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

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

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['report_id' => 'report_id', 'Authorization' => 'Authorization'];

    protected const REQUIRED_FIELDS = ['report_id', 'Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['report_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;

    /** @var string Токен для авторизации */
    public string $Authorization;
}
