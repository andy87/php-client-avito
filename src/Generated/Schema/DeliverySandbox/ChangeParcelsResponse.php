<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsResponse.
 */
class ChangeParcelsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData::class, 'error' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null Schema field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null Schema field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError $error = null;
}
