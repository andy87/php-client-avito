<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/setTrackingNumber.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/setOrderTrackingNumber
 */
class SetOrderTrackingNumberResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['errorData' => 'error', 'success' => 'success'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderSetTrackingNumberResponse::class;

    /** @var array<string, mixed>|null Response field error */
    public ?array $errorData = null;

    /** @var bool|null Флаг успеха обновления */
    public ?bool $success = null;
}
