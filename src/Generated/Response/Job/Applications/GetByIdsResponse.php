<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Job\Applications;

use Andy87\ClientsAvito\Generated\Response\ApplicationsGetByIdsResponse as BaseApplicationsGetByIdsResponse;

/**
 * Ответ Avito API [POST] /job/v1/applications/get_by_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetByIds
 * 
 * @property array<int, array<string, mixed>>|null $applies Список откликов
 */
class GetByIdsResponse extends BaseApplicationsGetByIdsResponse
{
}
