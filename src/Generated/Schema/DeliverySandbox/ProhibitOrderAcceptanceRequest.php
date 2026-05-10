<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/prohibitOrderAcceptanceRequest.
 */
class ProhibitOrderAcceptanceRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
