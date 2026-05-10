<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Cpa;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/ErrorPayload.
 */
class ErrorPayload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['balance' => 'balance'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Баланс пользователя */
    public ?int $balance = null;
}
