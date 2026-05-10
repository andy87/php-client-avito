<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PriceStatForNewCarsAutoteka.
 */
class PriceStatForNewCarsAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['items' => 'items', 'price' => 'price'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Массив модификаций авто с ценами */
    public ?array $items = null;

    /** @var array<string, mixed>|null Schema field price */
    public ?array $price = null;
}
