<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Cpa\Chat;

use php_client_avito\Generated\Response\ChatByActionIdResponse as BaseChatByActionIdResponse;

/**
 * Ответ Avito API [GET] /cpa/v1/chatByActionId/{actionId}.
 *
 * @documentation https://developers.avito.ru/api-catalog/cpa/documentation#operation/chatByActionId
 *
 * @property \php_client_avito\Generated\Schema\Cpa\OpenApiChatsComposition|null $chat Response field chat
 */
class ByActionIdResponse extends BaseChatByActionIdResponse
{
}
