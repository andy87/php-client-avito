<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ValuesByPaidWeight.
 */
class ValuesByPaidWeight extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['values' => 'values'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список диапазонов весов и коэффициентов для объемного веса и соответствующих им стоимостей */
    public ?array $values = null;
}
