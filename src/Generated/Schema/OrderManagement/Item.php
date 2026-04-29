<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/item.
 */
class Item extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avitoId' => 'avitoId', 'chatId' => 'chatId', 'count' => 'count', 'discounts' => 'discounts', 'id' => 'id', 'location' => 'location', 'prices' => 'prices', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['avitoId', 'title', 'prices', 'count'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['discounts' => [\Andy87\ClientsAvito\Generated\Schema\OrderManagement\Discount::class], 'prices' => \Andy87\ClientsAvito\Generated\Schema\OrderManagement\ItemPrices::class];

    /** @var string ID товара в базе Avito */
    public string $avitoId;

    /** @var string|null Идентификатор чата */
    public ?string $chatId = null;

    /** @var int Количество товара */
    public int $count;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\OrderManagement\Discount>|null Список примененных скидок */
    public ?array $discounts = null;

    /** @var string|null ID товара в базе продавца */
    public ?string $id = null;

    /** @var string|null Город, в котором размещено объявление */
    public ?string $location = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\OrderManagement\ItemPrices Schema field prices */
    public \Andy87\ClientsAvito\Generated\Schema\OrderManagement\ItemPrices $prices;

    /** @var string Название товара */
    public string $title;
}
