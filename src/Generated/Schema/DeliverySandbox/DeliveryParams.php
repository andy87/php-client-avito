<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-params.
 */
class DeliveryParams extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'dimensions' => 'dimensions', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['delivery' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryTerms::class, 'dimensions' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDimensions::class, 'weight' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryWeight::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryTerms|null Schema field delivery */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryTerms $delivery = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDimensions|null Schema field dimensions */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDimensions $dimensions = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryWeight|null Schema field weight */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryWeight $weight = null;
}
