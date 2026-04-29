<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ValuesByDimension.
 */
class ValuesByDimension extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['values' => 'values'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список диапазонов ВГХ и соответствующих им стоимостей */
    public ?array $values = null;
}
