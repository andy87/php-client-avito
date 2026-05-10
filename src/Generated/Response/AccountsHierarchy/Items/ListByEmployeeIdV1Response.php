<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\AccountsHierarchy\Items;

use php_client_avito\Generated\Response\ListItemsByEmployeeIdV1Response as BaseListItemsByEmployeeIdV1Response;

/**
 * Ответ Avito API [POST] /listItemsByEmployeeIdV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listItemsByEmployeeIdV1
 *
 * @property bool $hasNext Можно пагинировать дальше по списку
 * @property array<int, int> $items Список идентификаторов объявлений
 */
class ListByEmployeeIdV1Response extends BaseListItemsByEmployeeIdV1Response
{
}
