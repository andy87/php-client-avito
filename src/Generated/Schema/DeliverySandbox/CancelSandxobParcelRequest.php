<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CancelSandxobParcelRequest.
 */
class CancelSandxobParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['options' => 'options', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CancelSandboxParcelOptions $options = null;

    /** @var string Schema field parcelID */
    public string $parcelID;
}
