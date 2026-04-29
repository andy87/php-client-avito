<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
