<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
