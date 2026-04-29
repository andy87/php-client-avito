<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\User;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito user/ResponseOperationsHistory.
 */
class ResponseOperationsHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field result */
    public ?array $result = null;
}
