<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/Chats.
 */
class Chats extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\Andy87\ClientsAvito\Generated\Schema\Messenger\Chat::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Messenger\Chat>|null Список чатов */
    public ?array $chats = null;
}
