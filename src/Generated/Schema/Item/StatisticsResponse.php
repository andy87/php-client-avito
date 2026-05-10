<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/StatisticsResponse.
 */
class StatisticsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors', 'result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field errors */
    public ?array $errors = null;

    /** @var array<string, mixed>|null Статистические счетчики объявления */
    public ?array $result = null;
}
