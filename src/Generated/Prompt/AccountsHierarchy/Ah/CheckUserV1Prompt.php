<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\AccountsHierarchy\Ah;

use Andy87\ClientsAvito\Generated\Prompt\CheckAhUserV1Prompt as BaseCheckAhUserV1Prompt;

/**
 * Класс данных запроса Avito API [GET] /checkAhUserV1.
 *
 * @documentation https://developers.avito.ru/api-catalog/accounts-hierarchy/documentation#operation/checkAhUserV1
 *
 * @property string|null $X_Oauth_Scopes список зон доступа, полученных приложением
 * @property string|null $X_Oauth_Flow выбранный флоу авторизации по протоколу OAuth 2.0 (client_credentials/authorization_code)
 */
class CheckUserV1Prompt extends BaseCheckAhUserV1Prompt
{
}
