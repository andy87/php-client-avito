<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Cpa;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito cpa/InternalError.
 */
class InternalError extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field result */
    public array $result;
}
