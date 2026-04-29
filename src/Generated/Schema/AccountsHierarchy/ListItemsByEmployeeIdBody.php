<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\AccountsHierarchy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito accounts-hierarchy/ListItemsByEmployeeIdBody.
 */
class ListItemsByEmployeeIdBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categoryId' => 'categoryId', 'employeeId' => 'employeeId', 'lastItemId' => 'lastItemId'];

    protected const REQUIRED_FIELDS = ['employeeId', 'categoryId'];

    protected const NULLABLE_FIELDS = ['lastItemId'];

    protected const CASTS = [];

    /** @var int Идентификатор категории объявления */
    public int $categoryId;

    /** @var int Идентификатор сотрудника, к которому прилинкованы объявления */
    public int $employeeId;

    /** @var int|null Идентификатор объявления для пагинации по курсору */
    public ?int $lastItemId = null;
}
