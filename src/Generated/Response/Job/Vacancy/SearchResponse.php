<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Vacancy;

use Andy87\ClientsAvito\Generated\Response\SearchVacancyResponse as BaseSearchVacancyResponse;

/**
 * Ответ Avito API [GET] /job/v2/vacancies.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/searchVacancy
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Job\VacancySearchMeta|null $meta Response field meta
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedVacancy>|null $vacancies Response field vacancies
 */
class SearchResponse extends BaseSearchVacancyResponse
{
}
