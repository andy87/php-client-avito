<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /order-management/1/order/cncSetDetails.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/cncSetDetails
 */
class CncSetDetailsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['result' => 'result', 'status' => 'status'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\OrderManagement\OrderCNCSetDetailsResponse::class;

    /** @var array<string, mixed>|null Response field result */
    public ?array $result = null;

    /** @var string|null Response field status */
    public ?string $status = null;
}
