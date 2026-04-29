<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autoteka\Access;

use Andy87\ClientsAvito\Generated\Prompt\GetAccessTokenPrompt2 as BaseGetAccessTokenPrompt2;

/**
 * Класс данных запроса Avito API [POST] /token.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getAccessToken
 * 
 * @property string $grant_type Тип OAuth flow – строка client_credentials
 * @property string $client_id query-parameter client_id
 * @property string $client_secret query-parameter client_secret
 */
class GetTokenPrompt extends BaseGetAccessTokenPrompt2
{
}
