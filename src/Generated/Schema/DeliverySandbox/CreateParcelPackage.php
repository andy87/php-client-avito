<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelPackage.
 */
class CreateParcelPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensions' => 'dimensions', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = ['dimensions', 'weight'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dimensions' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions::class, 'weight' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions Schema field dimensions */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions $dimensions;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight Schema field weight */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight $weight;
}
