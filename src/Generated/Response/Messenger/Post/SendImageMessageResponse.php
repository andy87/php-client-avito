<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Messenger\Post;

use Andy87\ClientsAvito\Generated\Response\PostSendImageMessageResponse as BasePostSendImageMessageResponse;

/**
 * Ответ Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/image.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendImageMessage
 * 
 * @property int|null $author_id Response field author_id
 * @property array<string, mixed>|null $content Response field content
 * @property int|null $created Response field created
 * @property string|null $direction Response field direction
 * @property string|null $id Response field id
 * @property string|null $type Response field type
 */
class SendImageMessageResponse extends BasePostSendImageMessageResponse
{
}
