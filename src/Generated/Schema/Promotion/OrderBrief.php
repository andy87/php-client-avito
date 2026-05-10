<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderBrief.
 */
class OrderBrief extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'id' => 'id', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['status' => \php_client_avito\Generated\Schema\Promotion\OrderStatus::class];

    /** @var string|null Дата создания заявки */
    public ?string $createdAt = null;

    /** @var string|null Идентификатор заявки */
    public ?string $id = null;

    /** @var \php_client_avito\Generated\Schema\Promotion\OrderStatus|null Schema field status */
    public ?\php_client_avito\Generated\Schema\Promotion\OrderStatus $status = null;
}
