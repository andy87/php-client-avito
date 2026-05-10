<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Messenger;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/PayloadStruct.
 */
class PayloadStruct extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['value' => \php_client_avito\Generated\Schema\Messenger\WebhookMessage::class];

    /** @var string|null Тип сообщения */
    public ?string $type = null;

    /** @var \php_client_avito\Generated\Schema\Messenger\WebhookMessage|null Schema field value */
    public ?\php_client_avito\Generated\Schema\Messenger\WebhookMessage $value = null;
}
