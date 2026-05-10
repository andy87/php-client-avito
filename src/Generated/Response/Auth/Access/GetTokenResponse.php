<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Auth\Access;

use php_client_avito\Generated\Response\GetAccessTokenResponse as BaseGetAccessTokenResponse;

/**
 * Ответ Avito API [POST] /token.
 *
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/getAccessToken
 *
 * @property string|null $access_token Ключ для временной авторизации в системе
 * @property float|null $expires_in Время жизни ключа в секундах
 * @property string|null $token_type Тип ключа авторизации
 */
class GetTokenResponse extends BaseGetAccessTokenResponse
{
}
