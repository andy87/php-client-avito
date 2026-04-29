<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyGetStatusesPrompt as BaseVacancyGetStatusesPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/statuses.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses
 * 
 * @property array<int, string> $ids Body field ids
 */
class GetStatusesPrompt extends BaseVacancyGetStatusesPrompt
{
}
