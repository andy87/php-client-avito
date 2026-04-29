<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getReportByIdV3.
 */
class GetReportByIdV3Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v3/reports/{report_id}';

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
