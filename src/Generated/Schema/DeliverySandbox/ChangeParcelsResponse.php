<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelsResponse.
 */
class ChangeParcelsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData::class, 'error' => \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData|null Schema field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError|null Schema field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\ChangeParcelsError $error = null;
}
