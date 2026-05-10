<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Job\Vacancy;

use php_client_avito\Generated\Response\SearchVacancyResponse as BaseSearchVacancyResponse;

/**
 * Ответ Avito API [GET] /job/v2/vacancies.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/searchVacancy
 *
 * @property \php_client_avito\Generated\Schema\Job\VacancySearchMeta|null $meta Response field meta
 * @property array<int, \php_client_avito\Generated\Schema\Job\SimplifiedVacancy>|null $vacancies Response field vacancies
 */
class SearchResponse extends BaseSearchVacancyResponse
{
}
