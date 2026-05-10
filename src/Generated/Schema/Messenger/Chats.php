<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Messenger;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/Chats.
 */
class Chats extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['chats' => 'chats'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['chats' => [\php_client_avito\Generated\Schema\Messenger\Chat::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Messenger\Chat>|null Список чатов */
    public ?array $chats = null;
}
