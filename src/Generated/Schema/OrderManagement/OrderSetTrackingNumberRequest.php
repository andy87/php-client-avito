<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/orderSetTrackingNumberRequest.
 */
class OrderSetTrackingNumberRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'trackingNumber' => 'trackingNumber'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null ID заказа в Авито */
    public ?string $orderId = null;

    /** @var string|null Трек-номер посылки */
    public ?string $trackingNumber = null;
}
