<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/itemIdsRequestBody.
 */
class ItemIdsRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['item_ids' => 'item_ids'];

    protected const REQUIRED_FIELDS = ['item_ids'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, int> Набор идентификаторов объявлений на сайте */
    public array $item_ids;
}
