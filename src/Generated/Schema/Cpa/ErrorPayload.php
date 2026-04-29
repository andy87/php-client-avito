<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
