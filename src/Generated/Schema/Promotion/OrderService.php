<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/OrderService.
 */
class OrderService extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'price' => 'price', 'slug' => 'slug', 'statusId' => 'statusId'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['statusId' => \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderServiceStatus::class];

    /** @var int|null Идентификатор объявления */
    public ?int $itemId = null;

    /** @var int|null Цена услуги на момент создания задачи (в копейках) */
    public ?int $price = null;

    /** @var string|null Тип услуги */
    public ?string $slug = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Promotion\OrderServiceStatus|null Schema field statusId */
    public ?\Andy87\ClientsAvito\Generated\Schema\Promotion\OrderServiceStatus $statusId = null;
}
