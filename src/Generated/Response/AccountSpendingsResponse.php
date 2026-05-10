<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /stats/v2/accounts/{user_id}/spendings.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/accountSpendings
 */
class AccountSpendingsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Item\SpendingsResponse::class;

    /** @var array<string, mixed> Response field result */
    public array $result;
}
