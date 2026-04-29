<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/VasResp.
 */
class VasResp extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['price' => 'price', 'priceOld' => 'priceOld', 'slug' => 'slug'];

    protected const REQUIRED_FIELDS = ['slug', 'price', 'priceOld'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Цена со скидкой */
    public int $price;

    /** @var int Цена до применения скидки */
    public int $priceOld;

    /** @var string Идентификатор услуги или пакета услуг */
    public string $slug;
}
