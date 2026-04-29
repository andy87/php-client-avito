<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Messenger;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito messenger/addBlacklistRequestBody.
 */
class AddBlacklistRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['users' => 'users'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Schema field users */
    public ?array $users = null;
}
