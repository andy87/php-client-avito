<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API searchVacancy.
 */
class SearchVacancyResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['meta' => 'meta', 'vacancies' => 'vacancies'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['meta' => \Andy87\ClientsAvito\Generated\Schema\Job\VacancySearchMeta::class, 'vacancies' => [\Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedVacancy::class]];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\VacancySearchMeta|null Response field meta */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\VacancySearchMeta $meta = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Job\SimplifiedVacancy>|null Response field vacancies */
    public ?array $vacancies = null;
}
