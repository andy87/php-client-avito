<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Prompt\VacancyAutoRenewalPrompt as BaseVacancyAutoRenewalPrompt;

/**
 * Класс данных запроса Avito API [PUT] /job/v2/vacancies/{vacancy_uuid}/auto_renewal.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacancyAutoRenewal
 * 
 * @property bool $auto_renewal Body field auto_renewal
 */
class AutoRenewalPrompt extends BaseVacancyAutoRenewalPrompt
{
}
