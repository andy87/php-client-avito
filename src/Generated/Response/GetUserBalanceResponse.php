<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /core/v1/accounts/{user_id}/balance/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/user/documentation#operation/getUserBalance
 */
class GetUserBalanceResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['bonus' => 'bonus', 'real' => 'real'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\User\Balance::class;

    /** @var float|null Сумма бонусных средств */
    public ?float $bonus = null;

    /** @var float|null Сумма реальных денежных средств */
    public ?float $real = null;
}
