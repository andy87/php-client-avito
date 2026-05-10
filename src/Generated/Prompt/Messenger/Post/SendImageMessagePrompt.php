<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Messenger\Post;

use and_y87\php_client_avito\Generated\Prompt\PostSendImageMessagePrompt as BasePostSendImageMessagePrompt;

/**
 * Класс данных запроса Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/image.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/postSendImageMessage
 *
 * @property int $user_id Идентификатор пользователя (клиента)
 * @property string $chat_id Идентификатор чата (клиента)
 * @property string $image_id Идентификатор загруженного изображения
 */
class SendImageMessagePrompt extends BasePostSendImageMessagePrompt
{
}
