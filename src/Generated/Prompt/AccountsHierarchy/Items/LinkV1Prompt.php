<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\AccountsHierarchy\Items;

use and_y87\php_client_avito\Generated\Prompt\LinkItemsV1Prompt as BaseLinkItemsV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /linkItemsV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/linkItemsV1
 *
 * @property string|null $X_Oauth_Scopes Список зон доступа, полученных приложением
 * @property string|null $X_Oauth_Flow Выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code)
 * @property int $employeeId Идентификатор сотрудника, к которому прилинкуются объявления
 * @property array<int, int> $itemIds Список идентификаторов объявлений для линковки (max 50)
 */
class LinkV1Prompt extends BaseLinkItemsV1Prompt
{
}
