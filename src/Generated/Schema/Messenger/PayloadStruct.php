<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/PayloadStruct.
 */
class PayloadStruct extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['value' => \Andy87\ClientsAvito\Generated\Schema\Messenger\WebhookMessage::class];

    /** @var string|null Тип сообщения */
    public ?string $type = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Messenger\WebhookMessage|null Schema field value */
    public ?\Andy87\ClientsAvito\Generated\Schema\Messenger\WebhookMessage $value = null;
}
