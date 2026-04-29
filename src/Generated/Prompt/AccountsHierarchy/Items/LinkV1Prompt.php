<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\AccountsHierarchy\Items;

use Andy87\ClientsAvito\Generated\Prompt\LinkItemsV1Prompt as BaseLinkItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /linkItemsV1.
 * 
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/linkItemsV1
 * 
 * @property int $employeeId Идентификатор сотрудника, к которому прилинкуются объявления
 * @property array<int, int> $itemIds Список идентификаторов объявлений для линковки (max 50)
 */
class LinkV1Prompt extends BaseLinkItemsV1Prompt
{
}
