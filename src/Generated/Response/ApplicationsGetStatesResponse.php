<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Job\ApplicationsGetStatesResult::class;

    /** @var array<int, array<string, mixed>>|null Список возможных статусов откликов */
    public ?array $states = null;
}
