<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\User\User;

use and_y87\php_client_avito\Generated\Response\GetUserInfoSelfResponse as BaseGetUserInfoSelfResponse;

/**
 * Ответ Avito API [GET] /core/v1/accounts/self.
 *
 * @documentation https://developers.avito.ru/api-catalog/user/documentation#operation/getUserInfoSelf
 *
 * @property string|null $email Email пользователя
 * @property int|null $id Идентификатор пользователя
 * @property string|null $name Имя пользователя
 * @property string|null $phone первый верифицированный телефон пользователя
 * @property array<int, string>|null $phones все верифицированные номера телефонов
 * @property string|null $profile_url Ссылка на профиль пользователя
 */
class GetInfoSelfResponse extends BaseGetUserInfoSelfResponse
{
}
