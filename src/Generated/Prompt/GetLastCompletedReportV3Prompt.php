<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoload/v3/reports/last_completed_report.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getLastCompletedReportV3
 */
class GetLastCompletedReportV3Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/autoload/v3/reports/last_completed_report';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = false;

    protected const FIELD_MAP = ['Authorization' => 'Authorization'];

    protected const REQUIRED_FIELDS = ['Authorization'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];

    /** @var string Токен для авторизации */
    public string $Authorization;
}
