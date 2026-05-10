<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Job\Vacancy;

use and_y87\php_client_avito\Generated\Prompt\VacancyArchivePrompt as BaseVacancyArchivePrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v1/vacancies/archived/{vacancy_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyArchive
 *
 * @property int $vacancy_id Идентификатор вакансии на сайте
 * @property bool|null $X_Is_Employee Сотрудник компании может остановить публикацию только для своих вакансий
 * @property int|null $employee_id employee_id - Идентификатор сотрудника на Авито. Сотрудник может останавливать только закрепленные за ним вакансии в Avito Pro. Сотрудник должен быть в активен.
 */
class ArchivePrompt extends BaseVacancyArchivePrompt
{
}
