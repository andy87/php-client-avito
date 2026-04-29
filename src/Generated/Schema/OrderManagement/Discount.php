<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/discount.
 */
class Discount extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Идентификатор скидки */
    public ?string $id = null;

    /** @var string|null Тип скидки */
    public ?string $type = null;

    /** @var float|null Размер скидки */
    public ?float $value = null;
}
