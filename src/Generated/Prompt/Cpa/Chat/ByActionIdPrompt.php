<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Cpa\Chat;

use and_y87\php_client_avito\Generated\Prompt\ChatByActionIdPrompt as BaseChatByActionIdPrompt;

/**
 * Класс данных запроса Avito API [GET] /cpa/v1/chatByActionId/{actionId}.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatByActionId
 *
 * @property string $X_Source Имя сервиса, отправляющего запрос
 * @property int $actionId Идентификатор целевого действия
 */
class ByActionIdPrompt extends BaseChatByActionIdPrompt
{
}
