<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Messenger\Chats;

use Andy87\ClientsAvito\Generated\Response\GetChatsV2Response as BaseGetChatsV2Response;

/**
 * Ответ Avito API [GET] /messenger/v2/accounts/{user_id}/chats.
 * 
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatsV2
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Messenger\Chat>|null $chats Список чатов
 */
class GetV2Response extends BaseGetChatsV2Response
{
}
