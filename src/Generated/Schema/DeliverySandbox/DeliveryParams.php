<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-params.
 */
class DeliveryParams extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'dimensions' => 'dimensions', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['delivery' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryTerms::class, 'dimensions' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDimensions::class, 'weight' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryWeight::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryTerms|null Schema field delivery */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryTerms $delivery = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDimensions|null Schema field dimensions */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDimensions $dimensions = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryWeight|null Schema field weight */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryWeight $weight = null;
}
