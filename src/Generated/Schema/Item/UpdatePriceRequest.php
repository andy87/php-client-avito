<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/UpdatePriceRequest.
 */
class UpdatePriceRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['price' => 'price'];

    protected const REQUIRED_FIELDS = ['price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Цена */
    public int $price;
}
