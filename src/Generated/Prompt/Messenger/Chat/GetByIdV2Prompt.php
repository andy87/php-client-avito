<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Messenger\Chat;

use php_client_avito\Generated\Prompt\GetChatByIdV2Prompt as BaseGetChatByIdV2Prompt;

/**
 * Класс данных запроса Avito API [GET] /messenger/v2/accounts/{user_id}/chats/{chat_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatByIdV2
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property string $chat_id Идентификатор чата (клиента)
 */
class GetByIdV2Prompt extends BaseGetChatByIdV2Prompt
{
}
