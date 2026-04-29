<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/MessageContent.
 */
class MessageContent extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['call' => 'call', 'flow_id' => 'flow_id', 'image' => 'image', 'item' => 'item', 'link' => 'link', 'location' => 'location', 'text' => 'text', 'voice' => 'voice'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['call', 'flow_id', 'image', 'item', 'link', 'location', 'text', 'voice'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Объект, описывающий звонок, для сообщения типа call */
    public ?array $call = null;

    /** @var string|null Идентификатор чат-бота, отправившего сообщение, для сообщений типа system */
    public ?string $flow_id = null;

    /** @var array<string, mixed>|null Объект, описывающий изображение, для сообщения типа image */
    public ?array $image = null;

    /** @var array<string, mixed>|null Объект, описывающий объявление, для сообщения типа item */
    public ?array $item = null;

    /** @var array<string, mixed>|null Объект, описывающий ссылку, для сообщения типа link */
    public ?array $link = null;

    /** @var array<string, mixed>|null Объект, описывающий геометку, для сообщения типа location */
    public ?array $location = null;

    /** @var string|null Текст сообщения, для сообщения типа text */
    public ?string $text = null;

    /** @var array<string, mixed>|null Объект, описывающий голосовое сообщение, для сообщения типа voice */
    public ?array $voice = null;
}
