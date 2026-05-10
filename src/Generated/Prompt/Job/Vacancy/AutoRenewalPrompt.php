<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Job\Vacancy;

use and_y87\php_client_avito\Generated\Prompt\VacancyAutoRenewalPrompt as BaseVacancyAutoRenewalPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v2/vacancies/{vacancy_uuid}/auto_renewal.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyAutoRenewal
 *
 * @property string $vacancy_uuid UUID Идентификатор вакансии для V2 ручек (возвращается ручкой [Публикация вакансии V2](https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyCreateV2) )
 * @property bool|null $X_Is_Employee Включает привилегии компании для сотрудника, позволяет включать автопродление вакансий принадлежащих сотруднику опубликованных от имени компании
 * @property bool $auto_renewal Body field auto_renewal
 */
class AutoRenewalPrompt extends BaseVacancyAutoRenewalPrompt
{
}
