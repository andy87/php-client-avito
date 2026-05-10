<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetTaskReply.
 */
class GetTaskReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData::class, 'error' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData|null Schema field data */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData $data = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Schema field error */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $error = null;
}
