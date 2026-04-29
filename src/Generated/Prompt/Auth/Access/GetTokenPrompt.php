<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Auth\Access;

use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenPrompt as BaseGetAccessTokenPrompt;

/**
 * Класс данных запроса Avito API [POST] /token.
 * 
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/getAccessToken
 * 
 * @property string $client_id Body field client_id
 * @property string $client_secret Body field client_secret
 * @property string $grant_type Body field grant_type
 */
class GetTokenPrompt extends BaseGetAccessTokenPrompt
{
}
