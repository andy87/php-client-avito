<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Applications;

use Andy87\ClientsAvito\Generated\Prompt\ApplicationsGetByIdsPrompt as BaseApplicationsGetByIdsPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/get_by_ids.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetByIds
 * 
 * @property array<int, string>|null $ids Body field ids
 */
class GetByIdsPrompt extends BaseApplicationsGetByIdsPrompt
{
}
