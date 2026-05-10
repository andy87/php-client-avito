<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetOrderPropertiesRequest.
 */
class DeliverySetOrderPropertiesRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['orderId', 'properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class, 'properties' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams Schema field properties */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams $properties;
}
