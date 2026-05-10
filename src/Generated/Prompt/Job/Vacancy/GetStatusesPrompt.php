<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Job\Vacancy;

use and_y87\php_client_avito\Generated\Prompt\VacancyGetStatusesPrompt as BaseVacancyGetStatusesPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v2/vacancies/statuses.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyGetStatuses
 *
 * @property bool|null $X_Is_Employee Сотрудник компании получает информацию о статусе публикации вакансии, которую он опубликовал для компании
 * @property array<int, string> $ids Body field ids
 */
class GetStatusesPrompt extends BaseVacancyGetStatusesPrompt
{
}
