<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelV2.
 */
class CreateSandboxParcelV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'options' => 'options', 'receiver' => 'receiver', 'sender' => 'sender', 'tags' => 'tags'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem::class], 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options::class];

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxParcelItem>|null Schema field items */
    public ?array $items = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateSandboxV2Options $options = null;

    /** @var array<string, mixed>|null Schema field receiver */
    public ?array $receiver = null;

    /** @var array<string, mixed>|null Schema field sender */
    public ?array $sender = null;

    /** @var array<int, string>|null Schema field tags */
    public ?array $tags = null;
}
