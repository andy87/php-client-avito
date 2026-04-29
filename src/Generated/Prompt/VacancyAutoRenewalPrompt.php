<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API vacancyAutoRenewal.
 */
class VacancyAutoRenewalPrompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/job/v2/vacancies/{vacancy_uuid}/auto_renewal';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['auto_renewal' => 'auto_renewal'];

    protected const REQUIRED_FIELDS = ['auto_renewal'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['auto_renewal'];

    /** @var bool Body field auto_renewal */
    public bool $auto_renewal;
}
