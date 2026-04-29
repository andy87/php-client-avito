<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /job/v2/vacancies/batch.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/vacanciesGetByIds
 */
class VacanciesGetByIdsResponse extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\Vacancies20::class;
}
