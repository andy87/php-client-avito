<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetOrderPropertiesReply.
 */
class DeliverySetOrderPropertiesReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['data'];

    protected const CASTS = ['error' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    /** @var array<string, mixed>|null Schema field data */
    public ?array $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Schema field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $error = null;
}
