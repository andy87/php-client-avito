<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API postSendMessage.
 */
class PostSendMessageResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['content' => 'content', 'created' => 'created', 'direction' => 'direction', 'id' => 'id', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = null;

    /** @var array<string, mixed>|null Response field content */
    public ?array $content = null;

    /** @var int|null Response field created */
    public ?int $created = null;

    /** @var string|null Response field direction */
    public ?string $direction = null;

    /** @var string|null Response field id */
    public ?string $id = null;

    /** @var string|null Response field type */
    public ?string $type = null;
}
