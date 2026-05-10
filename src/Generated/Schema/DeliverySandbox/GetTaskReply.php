<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetTaskReply.
 */
class GetTaskReply extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData::class, 'error' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData|null Schema field data */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\GetTaskData $data = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError|null Schema field error */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryError $error = null;
}
