<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelRequest.
 */
class ChangeParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['application' => 'application', 'options' => 'options', 'parcelID' => 'parcelID', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['application' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication::class, 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication|null Schema field application */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication $application = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions $options = null;

    /** @var string Schema field parcelID */
    public string $parcelID;

    /** @var string Schema field type */
    public string $type;
}
