<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Cpa\Complaint;

use Andy87\ClientsAvito\Generated\Prompt\CreateComplaintByActionIdPrompt as BaseCreateComplaintByActionIdPrompt;

/**
 * Класс данных запроса Avito API [POST] /cpa/v1/createComplaintByActionId.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/createComplaintByActionId
 * 
 * @property int $actionId ID действия (action), по которому подаётся жалоба
 * @property string $message Сообщение, прикрепленное к жалобе
 */
class CreateByActionIdPrompt extends BaseCreateComplaintByActionIdPrompt
{
}
