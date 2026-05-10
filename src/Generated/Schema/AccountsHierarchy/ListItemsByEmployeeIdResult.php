<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\AccountsHierarchy;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito accounts-hierarchy/ListItemsByEmployeeIdResult.
 */
class ListItemsByEmployeeIdResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['hasNext' => 'hasNext', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['hasNext', 'items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool Можно пагинировать дальше по списку */
    public bool $hasNext;

    /** @var array<int, int> Список идентификаторов объявлений */
    public array $items;
}
