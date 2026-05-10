<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelPackage.
 */
class CreateParcelPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensions' => 'dimensions', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = ['dimensions', 'weight'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dimensions' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions::class, 'weight' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions Schema field dimensions */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions $dimensions;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight Schema field weight */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight $weight;
}
