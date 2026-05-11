<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\Model\AbstractResponse;

/**
 * Ответ Avito API [GET] /messenger/v3/accounts/{user_id}/chats/{chat_id}/messages/.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getMessagesV3
 */
class GetMessagesV3Response extends AbstractResponse
{
    protected const FIELD_MAP = [];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Messenger\Messages::class;
}
