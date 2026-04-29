<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/get_states.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetStates
 */
class ApplicationsGetStatesResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['states' => 'states'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Job\ApplicationsGetStatesResult::class;

    /** @var array<int, array<string, mixed>>|null Список возможных статусов откликов */
    public ?array $states = null;
}
