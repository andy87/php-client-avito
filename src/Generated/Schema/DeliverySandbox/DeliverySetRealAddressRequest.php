<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetRealAddressRequest.
 */
class DeliverySetRealAddressRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId', 'address'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var array<string, mixed> Schema field address */
    public array $address;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
