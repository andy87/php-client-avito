<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ValuesByWeight.
 */
class ValuesByWeight extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['values' => 'values'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список диапазонов весов и соответствующих им стоимостей */
    public ?array $values = null;
}
