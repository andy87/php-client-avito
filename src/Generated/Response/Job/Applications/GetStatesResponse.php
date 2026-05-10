<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Job\Applications;

use and_y87\php_client_avito\Generated\Response\ApplicationsGetStatesResponse as BaseApplicationsGetStatesResponse;

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
