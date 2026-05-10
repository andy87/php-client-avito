<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetOrderPropertiesRequest.
 */
class DeliverySetOrderPropertiesRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['orderId', 'properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class, 'properties' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams Schema field properties */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryParams $properties;
}
