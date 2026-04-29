<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsGetIdsResponse as BaseApplicationsGetIdsResponse;

/**
 * Ответ Avito API [GET] /job/v1/applications/get_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetIds
 * 
 * @property array<int, array<string, mixed>>|null $applies Список идентификаторов
 */
class GetIdsResponse extends BaseApplicationsGetIdsResponse
{
}
