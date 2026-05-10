<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /core/v1/items/{item_id}/update_price.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/updatePrice
 */
class UpdatePriceResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = ['result'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \php_client_avito\Generated\Schema\Item\UpdatePriceResponse::class;

    /** @var array<string, mixed> Response field result */
    public array $result;
}
