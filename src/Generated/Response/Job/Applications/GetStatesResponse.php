<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsGetStatesResponse as BaseApplicationsGetStatesResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/get_states.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetStates
 * 
 * @property array<int, array<string, mixed>>|null $states Список возможных статусов откликов
 */
class GetStatesResponse extends BaseApplicationsGetStatesResponse
{
}
