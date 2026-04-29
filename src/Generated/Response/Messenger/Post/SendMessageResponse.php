<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Messenger\Post;

use Andy87\ClientsAvito\Generated\Response\PostSendMessageResponse as BasePostSendMessageResponse;

/**
 * Ответ Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendMessage
 * 
 * @property array<string, mixed>|null $content Response field content
 * @property int|null $created Response field created
 * @property string|null $direction Response field direction
 * @property string|null $id Response field id
 * @property string|null $type Response field type
 */
class SendMessageResponse extends BasePostSendMessageResponse
{
}
