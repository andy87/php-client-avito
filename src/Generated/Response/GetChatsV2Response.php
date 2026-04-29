<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API getChatsV2.
 */
class GetChatsV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\Andy87\ClientsAvito\Generated\Schema\Messenger\Chat::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Messenger\Chats::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Messenger\Chat>|null Список чатов */
    public ?array $chats = null;
}
