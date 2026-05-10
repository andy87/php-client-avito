<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\AccountsHierarchy;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito accounts-hierarchy/LinkItems.
 */
class LinkItems extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['employeeId' => 'employeeId', 'itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['itemIds', 'employeeId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор сотрудника, к которому прилинкуются объявления */
    public int $employeeId;

    /** @var array<int, int> Список идентификаторов объявлений для линковки (max 50) */
    public array $itemIds;
}
