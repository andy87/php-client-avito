<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/ChangeParcelReplyData.
 */
class ChangeParcelReplyData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['applicationID' => 'applicationID'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field applicationID */
    public ?string $applicationID = null;
}
