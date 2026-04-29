<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/MessageQuote.
 */
class MessageQuote extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['author_id' => 'author_id', 'content' => 'content', 'created' => 'created', 'id' => 'id', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['content' => \Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent::class];

    /** @var int|null Schema field author_id */
    public ?int $author_id = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent|null Schema field content */
    public ?\Andy87\ClientsAvito\Generated\Schema\Messenger\MessageContent $content = null;

    /** @var int|null Schema field created */
    public ?int $created = null;

    /** @var string|null Schema field id */
    public ?string $id = null;

    /** @var string|null Schema field type */
    public ?string $type = null;
}
