<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/marking.
 */
class Marking extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'markings' => 'markings', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null ID товара в Авито */
    public ?string $itemId = null;

    /** @var array<int, string>|null Набор маркировок, которые требуется сохранить */
    public ?array $markings = null;

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;
}
