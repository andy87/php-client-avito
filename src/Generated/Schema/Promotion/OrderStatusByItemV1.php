<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderStatusByItemV1.
 */
class OrderStatusByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errorReason' => 'errorReason', 'itemId' => 'itemId', 'price' => 'price', 'slug' => 'slug', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['errorReason'];

    protected const CASTS = ['status' => \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus::class];

    /** @var string|null Описание ошибки */
    public ?string $errorReason = null;

    /** @var int|null Идентификатор объявления */
    public ?int $itemId = null;

    /** @var int|null Цена услуги на момент создания задачи (в копейках) */
    public ?int $price = null;

    /** @var string|null Тип услуги */
    public ?string $slug = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus|null Schema field status */
    public ?\and_y87\php_client_avito\Generated\Schema\Promotion\OrderStatus $status = null;
}
