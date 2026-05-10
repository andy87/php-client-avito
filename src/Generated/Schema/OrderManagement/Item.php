<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/item.
 */
class Item extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avitoId' => 'avitoId', 'chatId' => 'chatId', 'count' => 'count', 'discounts' => 'discounts', 'id' => 'id', 'location' => 'location', 'prices' => 'prices', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['avitoId', 'title', 'prices', 'count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['discounts' => [\and_y87\php_client_avito\Generated\Schema\OrderManagement\Discount::class], 'prices' => \and_y87\php_client_avito\Generated\Schema\OrderManagement\ItemPrices::class];

    /** @var string ID товара в базе Avito */
    public string $avitoId;

    /** @var string|null Идентификатор чата */
    public ?string $chatId = null;

    /** @var int Количество товара */
    public int $count;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\OrderManagement\Discount>|null Список примененных скидок */
    public ?array $discounts = null;

    /** @var string|null ID товара в базе продавца */
    public ?string $id = null;

    /** @var string|null Город, в котором размещено объявление */
    public ?string $location = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\OrderManagement\ItemPrices Schema field prices */
    public \and_y87\php_client_avito\Generated\Schema\OrderManagement\ItemPrices $prices;

    /** @var string Название товара */
    public string $title;
}
