<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/prohibitOrderAcceptanceRequest.
 */
class ProhibitOrderAcceptanceRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
