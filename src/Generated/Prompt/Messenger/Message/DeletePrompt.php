<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Messenger\Message;

use and_y87\php_client_avito\Generated\Prompt\DeleteMessagePrompt as BaseDeleteMessagePrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/{message_id}.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/deleteMessage
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property string $chat_id Идентификатор чата (клиента)
 * @property string $message_id Идентификатор сообщения
 */
class DeletePrompt extends BaseDeleteMessagePrompt
{
}
