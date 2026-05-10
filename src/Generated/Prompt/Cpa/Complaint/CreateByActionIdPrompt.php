<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Cpa\Complaint;

use and_y87\php_client_avito\Generated\Prompt\CreateComplaintByActionIdPrompt as BaseCreateComplaintByActionIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/createComplaintByActionId.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/createComplaintByActionId
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property int $actionId ID действия (action), по которому подаётся жалоба
 * @property string $message Сообщение, прикрепленное к жалобе
 */
class CreateByActionIdPrompt extends BaseCreateComplaintByActionIdPrompt
{
}
