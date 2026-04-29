<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/pricesItemIdsRequestBody.
 */
class PricesItemIdsRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, int> Набор идентификаторов объявлений на сайте */
    public array $itemIds;
}
