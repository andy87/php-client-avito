<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [PUT] /core/v2/accounts/{user_id}/items/{item_id}/vas_packages.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/putItemVasPackageV2
 */
class PutItemVasPackageV2Response extends AbstractResponse
{
    protected const FIELD_MAP = ['amount' => 'amount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Item\VasAmountAvito::class;

    /** @var float|null Сумма списания за применение услуги или пакета */
    public ?float $amount = null;
}
