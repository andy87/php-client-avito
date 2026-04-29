<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelPackage.
 */
class CreateParcelPackage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dimensions' => 'dimensions', 'weight' => 'weight'];

    protected const REQUIRED_FIELDS = ['dimensions', 'weight'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dimensions' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions::class, 'weight' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions Schema field dimensions */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemDimensions $dimensions;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight Schema field weight */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelItemWeight $weight;
}
