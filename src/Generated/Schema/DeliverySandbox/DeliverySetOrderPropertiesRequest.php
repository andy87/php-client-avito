<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetOrderPropertiesRequest.
 */
class DeliverySetOrderPropertiesRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId', 'properties' => 'properties'];

    protected const REQUIRED_FIELDS = ['orderId', 'properties'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class, 'properties' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams Schema field properties */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryParams $properties;
}
