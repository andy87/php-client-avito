<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyArchivePrompt as BaseVacancyArchivePrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v1/vacancies/archived/{vacancy_id}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyArchive
 * 
 * @property int|null $employee_id employee_id - Идентификатор сотрудника на Авито. Сотрудник может останавливать только закрепленные за ним вакансии в Avito Pro. Сотрудник должен быть в активен.
 */
class ArchivePrompt extends BaseVacancyArchivePrompt
{
}
