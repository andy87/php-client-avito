<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Messenger;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
