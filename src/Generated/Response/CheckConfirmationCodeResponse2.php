<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/checkConfirmationCode.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/checkConfirmationCode
 */
class CheckConfirmationCodeResponse2 extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderCheckConfirmationCodeResponse::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;
}
