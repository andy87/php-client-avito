<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/WebhookMessage.
 */
class WebhookMessage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['author_id' => 'author_id', 'chat_id' => 'chat_id', 'chat_type' => 'chat_type', 'content' => 'content', 'created' => 'created', 'id' => 'id', 'item_id' => 'item_id', 'published_at' => 'published_at', 'read' => 'read', 'type' => 'type', 'user_id' => 'user_id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['item_id', 'read'];

    protected const CASTS = ['content' => \Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent::class];

    /** @var int|null ID пользователя, отправившего сообщение */
    public ?int $author_id = null;

    /** @var string|null Уникальный идентификатор чата, куда отправлено сообщение */
    public ?string $chat_id = null;

    /** @var string|null Тип чата (u2i - чат по объявлению, u2u - чат по профилю пользователя, a2u - чат по профилю пользователя c Авито) */
    public ?string $chat_type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent|null Schema field content */
    public ?\Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent $content = null;

    /** @var int|null Unix-timestamp времени создания сообщения */
    public ?int $created = null;

    /** @var string|null Уникальный идентификатор сообщения */
    public ?string $id = null;

    /** @var int|null ID объявления, актуально только для чатов с типом u2i */
    public ?int $item_id = null;

    /** @var string|null Время публикации сообщения в формате RFC3339 в UTC */
    public ?string $published_at = null;

    /** @var int|null Unix-timestamp времени прочтения, если сообщение уже прочитано */
    public ?int $read = null;

    /** @var string|null Тип сообщения */
    public ?string $type = null;

    /** @var int|null ID пользователя, получившего сообщение. Это всегда аккаунт, на который зарегистрирован вебхук */
    public ?int $user_id = null;
}
