<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Cpa\Chats;

use php_client_avito\Generated\Response\ChatsByTimeResponse as BaseChatsByTimeResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/chatsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 *
 * @property array<int, \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition>|null $chats Response field chats
 */
class ByTimeResponse extends BaseChatsByTimeResponse
{
}
