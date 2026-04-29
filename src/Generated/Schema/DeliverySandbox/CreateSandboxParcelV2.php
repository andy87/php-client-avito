<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelV2.
 */
class CreateSandboxParcelV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'options' => 'options', 'receiver' => 'receiver', 'sender' => 'sender', 'tags' => 'tags'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem::class], 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem>|null Schema field items */
    public ?array $items = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options $options = null;

    /** @var array<string, mixed>|null Schema field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Schema field sender */
    public ?array $sender = null;

    /** @var array<int, string>|null Schema field tags */
    public ?array $tags = null;
}
