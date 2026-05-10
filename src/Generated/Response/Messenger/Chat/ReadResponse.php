<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Messenger\Chat;

use php_client_avito\Generated\Response\ChatReadResponse as BaseChatReadResponse;

/**
 * Ответ Avito API [POST] /messenger/v1/accounts/{user_id}/chats/{chat_id}/read.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/chatRead
 *
 * @property bool|null $ok Response field ok
 */
class ReadResponse extends BaseChatReadResponse
{
}
