<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CancelSandxobParcelRequest.
 */
class CancelSandxobParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['options' => 'options', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions $options = null;

    /** @var string Schema field parcelID */
    public string $parcelID;
}
