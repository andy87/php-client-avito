<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderPrices.
 */
class OrderPrices extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['commission' => 'commission', 'delivery' => 'delivery', 'discount' => 'discount', 'price' => 'price', 'total' => 'total'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float|null Комиссия Авито */
    public ?float $commission = null;

    /** @var float|null Стоимость доставки для DBS и RDBS */
    public ?float $delivery = null;

    /** @var float|null Сумма скидок */
    public ?float $discount = null;

    /** @var float|null Сумма заказа */
    public ?float $price = null;

    /** @var float|null Сумма к получению за заказ (стоимости товаров за вычетом скидок и комиссии) */
    public ?float $total = null;
}
