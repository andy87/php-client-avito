<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderBrief.
 */
class OrderBrief extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'id' => 'id', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['status' => \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus::class];

    /** @var string|null Дата создания заявки */
    public ?string $createdAt = null;

    /** @var string|null Идентификатор заявки */
    public ?string $id = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus|null Schema field status */
    public ?\and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus $status = null;
}
