<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/itemPrices.
 */
class ItemPrices extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['commission' => 'commission', 'discountSum' => 'discountSum', 'price' => 'price', 'total' => 'total'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Комиссия за товар */
    public ?float $commission = null;

    /** @var float|null Сумма примененных скидок на товар */
    public ?float $discountSum = null;

    /** @var float|null Цена товара */
    public ?float $price = null;

    /** @var float|null Цена товара за вычетом скидок */
    public ?float $total = null;
}
