<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/ItemsInfoWithCategoryAvito.
 */
class ItemsInfoWithCategoryAvito extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['meta' => 'meta', 'resources' => 'resources'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field meta */
    public ?array $meta = null;

    /** @var array<int, array<string, mixed>>|null Schema field resources */
    public ?array $resources = null;
}
