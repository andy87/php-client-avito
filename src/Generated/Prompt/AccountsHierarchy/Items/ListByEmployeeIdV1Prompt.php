<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\AccountsHierarchy\Items;

use and_y87\php_client_avito\Generated\Prompt\ListItemsByEmployeeIdV1Prompt as BaseListItemsByEmployeeIdV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /listItemsByEmployeeIdV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/listItemsByEmployeeIdV1
 *
 * @property string|null $X_Oauth_Scopes Список зон доступа, полученных приложением
 * @property string|null $X_Oauth_Flow Выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code)
 * @property bool|null $X_Is_Employee Список объявлений запрашивается от имени сотрудника.
 * @property int $categoryId Идентификатор категории объявления
 * @property int $employeeId Идентификатор сотрудника, к которому прилинкованы объявления
 * @property int|null $lastItemId Идентификатор объявления для пагинации по курсору
 */
class ListByEmployeeIdV1Prompt extends BaseListItemsByEmployeeIdV1Prompt
{
}
