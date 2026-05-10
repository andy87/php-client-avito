<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Messenger;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/sendMessageRequestBody.
 */
class SendMessageRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['message' => 'message', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field message */
    public ?array $message = null;

    /** @var string|null Тип сообщения */
    public ?string $type = null;
}
