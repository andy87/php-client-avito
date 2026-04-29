<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoteka\Access;

use Andy87\ClientsAvito\Generated\Response\GetAccessTokenResponse2 as BaseGetAccessTokenResponse2;

/**
 * Ответ Avito API [POST] /token.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/getAccessToken
 * 
 * @property string|null $access_token Ключ для временной авторизации в системе
 * @property float|null $expires_in Время жизни ключа в секундах
 * @property string|null $token_type Тип ключа авторизации
 */
class GetTokenResponse extends BaseGetAccessTokenResponse2
{
}
