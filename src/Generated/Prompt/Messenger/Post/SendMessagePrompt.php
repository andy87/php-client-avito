<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Messenger\Post;

use php_client_avito\Generated\Prompt\PostSendMessagePrompt as BasePostSendMessagePrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendMessage
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property string $chat_id Идентификатор чата (клиента)
 * @property array<string, mixed>|null $message Body field message
 * @property string|null $type Тип сообщения
 */
class SendMessagePrompt extends BasePostSendMessagePrompt
{
}
