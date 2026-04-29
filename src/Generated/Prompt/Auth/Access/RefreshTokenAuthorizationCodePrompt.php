<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Auth\Access;

use Andy87\ClientsAvito\Generated\Prompt\RefreshAccessTokenAuthorizationCodePrompt as BaseRefreshAccessTokenAuthorizationCodePrompt;

/**
 * Класс данных запроса Avito API [POST] /token‎‎.
 * 
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/refreshAccessTokenAuthorizationCode
 * 
 * @property string $client_id Body field client_id
 * @property string $client_secret Body field client_secret
 * @property string $grant_type Тип OAuth flow. Строка refresh_token
 * @property string $refresh_token Body field refresh_token
 */
class RefreshTokenAuthorizationCodePrompt extends BaseRefreshAccessTokenAuthorizationCodePrompt
{
}
