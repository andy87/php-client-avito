<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\AccountsHierarchy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
