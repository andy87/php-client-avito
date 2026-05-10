<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/GetRegisteredParcelIDRequest.
 */
class GetRegisteredParcelIDRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['orderID' => 'orderID'];

    protected const REQUIRED_FIELDS = ['orderID'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Schema field orderID */
    public string $orderID;
}
