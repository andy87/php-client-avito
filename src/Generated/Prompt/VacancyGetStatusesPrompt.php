<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/statuses.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses
 */
class VacancyGetStatusesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/job/v2/vacancies/statuses';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['ids' => 'ids'];

    protected const REQUIRED_FIELDS = ['ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['ids'];

    /** @var array<int, string> Body field ids */
    public array $ids;
}
