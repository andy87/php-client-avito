<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/Chat.
 */
class Chat extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['context' => 'context', 'created' => 'created', 'id' => 'id', 'last_message' => 'last_message', 'updated' => 'updated', 'users' => 'users'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Сопутствующая к чату информация, несвязанная с мессенджером напрямую */
    public ?array $context = null;

    /** @var int|null Unix-timestamp времени создания чата */
    public ?int $created = null;

    /** @var string|null Уникальный идентификтор чата */
    public ?string $id = null;

    /** @var array<string, mixed>|null Schema field last_message */
    public ?array $last_message = null;

    /** @var int|null Unix-timestamp времени последнего обновления чата */
    public ?int $updated = null;

    /** @var array<int, array<string, mixed>>|null Schema field users */
    public ?array $users = null;
}
