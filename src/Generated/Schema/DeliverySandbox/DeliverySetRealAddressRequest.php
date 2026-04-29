<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetRealAddressRequest.
 */
class DeliverySetRealAddressRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId', 'address'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var array<string, mixed> Schema field address */
    public array $address;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
