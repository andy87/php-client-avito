<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /messenger/v2/accounts/{user_id}/chats.
 *
 * @documentation https://developers.avito.ru/api-catalog/messenger/documentation#operation/getChatsV2
 */
class GetChatsV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\php_client_avito\Generated\Schema\Messenger\Chat::class]];

    protected const MODEL = \php_client_avito\Generated\Schema\Messenger\Chats::class;

    /** @var array<int, \php_client_avito\Generated\Schema\Messenger\Chat>|null Список чатов */
    public ?array $chats = null;
}
