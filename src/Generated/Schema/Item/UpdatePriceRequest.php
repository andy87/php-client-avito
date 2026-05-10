<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
