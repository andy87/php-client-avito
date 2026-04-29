<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
