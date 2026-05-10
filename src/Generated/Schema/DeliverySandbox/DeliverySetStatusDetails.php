<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliverySetStatusDetails.
 */
class DeliverySetStatusDetails extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['from' => 'from'];

    protected const REQUIRED_FIELDS = ['from'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Текущий статус. */
    public string $from;
}
