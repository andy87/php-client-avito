<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Job\Applications;

use php_client_avito\Generated\Prompt\ApplicationsSetIsViewedPrompt as BaseApplicationsSetIsViewedPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/set_is_viewed.
 *
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsSetIsViewed
 *
 * @property bool|null $X_Is_Employee Предоставляет возможность менять статус отклика от имени сотрудника
 * @property array<int, array<string, mixed>>|null $applies Список откликов
 */
class SetIsViewedPrompt extends BaseApplicationsSetIsViewedPrompt
{
}
