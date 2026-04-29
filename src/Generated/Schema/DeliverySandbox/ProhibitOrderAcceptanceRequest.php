<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/prohibitOrderAcceptanceRequest.
 */
class ProhibitOrderAcceptanceRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = ['orderId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['orderId' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field orderId */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $orderId;
}
