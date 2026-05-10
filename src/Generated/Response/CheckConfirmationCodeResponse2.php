<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use and_y87\PhpClientSdk\Response\AbstractResponse;

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

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\OrderManagement\OrderCheckConfirmationCodeResponse::class;

    /** @var array<string, mixed>|null Response field data */
    public ?array $data = null;
}
