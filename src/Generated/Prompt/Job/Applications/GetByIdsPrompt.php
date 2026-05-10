<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Job\Applications;

use and_y87\php_client_avito\Generated\Prompt\ApplicationsGetByIdsPrompt as BaseApplicationsGetByIdsPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/get_by_ids.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsGetByIds
 *
 * @property bool|null $X_Is_Employee Сотрудник может получить информацию по откликам для вакансий которые он разместил в рамках компании
 * @property array<int, string>|null $ids Body field ids
 */
class GetByIdsPrompt extends BaseApplicationsGetByIdsPrompt
{
}
