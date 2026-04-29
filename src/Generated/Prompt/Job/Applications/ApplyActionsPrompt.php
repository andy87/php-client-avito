<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Job\Applications;

use Andy87\ClientsAvito\Generated\Prompt\ApplicationsApplyActionsPrompt as BaseApplicationsApplyActionsPrompt;

/**
 * Класс данных запроса Avito API [POST] /job/v1/applications/apply_actions.
 * 
 * @documentation https://developers.avito.ru/api-catalog/job/documentation#operation/applicationsApplyActions
 * 
 * @property string $action Новый статус отклика, который нужно применить
 * @property array<int, string> $ids Список идентификаторов откликов, к которым нужно применить статус
 */
class ApplyActionsPrompt extends BaseApplicationsApplyActionsPrompt
{
}
