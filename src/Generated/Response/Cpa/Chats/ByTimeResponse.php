<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Cpa\Chats;

use Andy87\ClientsAvito\Generated\Response\ChatsByTimeResponse as BaseChatsByTimeResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/chatsByTime.
 * 
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Cpa\OpenApiChatsComposition>|null $chats Response field chats
 */
class ByTimeResponse extends BaseChatsByTimeResponse
{
}
