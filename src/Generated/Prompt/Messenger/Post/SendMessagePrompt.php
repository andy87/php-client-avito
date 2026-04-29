<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Messenger\Post;

use Andy87\ClientsAvito\Generated\Prompt\PostSendMessagePrompt as BasePostSendMessagePrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendMessage
 * 
 * @property array<string, mixed>|null $message Body field message
 * @property string|null $type Тип сообщения
 */
class SendMessagePrompt extends BasePostSendMessagePrompt
{
}
