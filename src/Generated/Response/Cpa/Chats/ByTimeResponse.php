<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Cpa\Chats;

use and_y87\php_client_avito\Generated\Response\ChatsByTimeResponse as BaseChatsByTimeResponse;

/**
 * Ответ Avito API [POST] /cpa/v1/chatsByTime.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatsByTime
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition>|null $chats Response field chats
 */
class ByTimeResponse extends BaseChatsByTimeResponse
{
}
