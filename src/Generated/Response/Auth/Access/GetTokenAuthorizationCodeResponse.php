<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Auth\Access;

use Andy87\ClientsAvito\Generated\Response\GetAccessTokenAuthorizationCodeResponse as BaseGetAccessTokenAuthorizationCodeResponse;

/**
 * Ответ Avito API [POST] /token‎.
 * 
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/getAccessTokenAuthorizationCode
 * 
 * @property string|null $access_token Ключ для временной авторизации в системе
 * @property float|null $expires_in Время жизни ключа в секундах
 * @property string|null $refresh_token Ключ для обновления токена доступа
 * @property string|null $scope Полученный скоуп
 * @property string|null $token_type Тип ключа авторизации
 */
class GetTokenAuthorizationCodeResponse extends BaseGetAccessTokenAuthorizationCodeResponse
{
}
