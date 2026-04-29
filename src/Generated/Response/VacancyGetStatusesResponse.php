<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /job/v2/vacancies/statuses.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses
 */
class VacancyGetStatusesResponse extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\VacancyStatusesResult::class;
}
