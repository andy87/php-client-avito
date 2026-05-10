<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetRealAddressRequest.
 */
class DeliverySetRealAddressRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId', 'address'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var array<string, mixed> Schema field address */
    public array $address;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
