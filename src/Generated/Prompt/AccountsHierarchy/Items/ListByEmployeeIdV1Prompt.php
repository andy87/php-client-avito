<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\AccountsHierarchy\Items;

use Andy87\ClientsAvito\Generated\Prompt\ListItemsByEmployeeIdV1Prompt as BaseListItemsByEmployeeIdV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /listItemsByEmployeeIdV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listItemsByEmployeeIdV1
 * 
 * @property int $categoryId Идентификатор категории объявления
 * @property int $employeeId Идентификатор сотрудника, к которому прилинкованы объявления
 * @property int|null $lastItemId Идентификатор объявления для пагинации по курсору
 */
class ListByEmployeeIdV1Prompt extends BaseListItemsByEmployeeIdV1Prompt
{
}
