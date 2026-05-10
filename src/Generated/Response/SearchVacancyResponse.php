<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['meta' => \php_client_avito\Generated\Schema\Job\VacancySearchMeta::class, 'vacancies' => [\php_client_avito\Generated\Schema\Job\SimplifiedVacancy::class]];

    protected const MODEL = null;

    /** @var \php_client_avito\Generated\Schema\Job\VacancySearchMeta|null Response field meta */
    public ?\php_client_avito\Generated\Schema\Job\VacancySearchMeta $meta = null;

    /** @var array<int, \php_client_avito\Generated\Schema\Job\SimplifiedVacancy>|null Response field vacancies */
    public ?array $vacancies = null;
}
