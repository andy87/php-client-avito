<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Auth\Access;

use and_y87\php_client_avito\Generated\Response\RefreshAccessTokenAuthorizationCodeResponse as BaseRefreshAccessTokenAuthorizationCodeResponse;

/**
 * Ответ Avito API [POST] /token‎‎.
 *
 * @documentation https://developers.avito.ru/api-catalog/auth/documentation#operation/refreshAccessTokenAuthorizationCode
 *
 * @property string|null $access_token Новый ключ для временной авторизации в системе
 * @property float|null $expires_in Время жизни ключа в секундах
 * @property string|null $refresh_token Новый ключ для обновления токена доступа
 * @property string|null $scope Полученный скоуп
 * @property string|null $token_type Тип ключа авторизации
 */
class RefreshTokenAuthorizationCodeResponse extends BaseRefreshAccessTokenAuthorizationCodeResponse
{
}
