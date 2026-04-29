<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\User\User;

use Andy87\ClientsAvito\Generated\Response\GetUserBalanceResponse as BaseGetUserBalanceResponse;

/**
 * Ответ Avito API [GET] /core/v1/accounts/{user_id}/balance/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/user/documentation#operation/getUserBalance
 * 
 * @property float|null $bonus Сумма бонусных средств
 * @property float|null $real Сумма реальных денежных средств
 */
class GetBalanceResponse extends BaseGetUserBalanceResponse
{
}
