<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelRequest.
 */
class ChangeParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['application' => 'application', 'options' => 'options', 'parcelID' => 'parcelID', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['application' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication::class, 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication|null Schema field application */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestApplication $application = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelRequestOptions $options = null;

    /** @var string Schema field parcelID */
    public string $parcelID;

    /** @var string Schema field type */
    public string $type;
}
