<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/action.
 */
class Action extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'required' => 'required'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Название действия */
    public ?string $name = null;

    /** @var bool|null Обязательность действия для продвижения заказа. */
    public ?bool $required = null;
}
