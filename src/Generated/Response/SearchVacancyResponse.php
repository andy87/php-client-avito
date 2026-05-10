<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v2/vacancies.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/searchVacancy
 */
class SearchVacancyResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \and_y87\php_client_avito\Generated\Schema\Job\VacancySearchMeta::class, 'vacancies' => [\and_y87\php_client_avito\Generated\Schema\Job\SimplifiedVacancy::class]];

    protected const MODEL = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Job\VacancySearchMeta|null Response field meta */
    public ?\and_y87\php_client_avito\Generated\Schema\Job\VacancySearchMeta $meta = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Job\SimplifiedVacancy>|null Response field vacancies */
    public ?array $vacancies = null;
}
