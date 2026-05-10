<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Auth\Access;

use and_y87\php_client_avito\Generated\Prompt\GetAccessTokenAuthorizationCodePrompt as BaseGetAccessTokenAuthorizationCodePrompt;

/**
 * Класс данных запроса Avito API [POST] /token.
 *
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/getAccessTokenAuthorizationCode
 *
 * @property string $client_id Body field client_id
 * @property string $client_secret Body field client_secret
 * @property string $code Body field code
 * @property string $grant_type Body field grant_type
 */
class GetTokenAuthorizationCodePrompt extends BaseGetAccessTokenAuthorizationCodePrompt
{
}
