<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
