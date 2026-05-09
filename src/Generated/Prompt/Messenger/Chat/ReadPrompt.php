<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Chat;

use Andy87\ClientsAvito\Generated\Prompt\ChatReadPrompt as BaseChatReadPrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/read.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/chatRead
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property string $chat_id Идентификатор чата (клиента)
 */
class ReadPrompt extends BaseChatReadPrompt
{
}
