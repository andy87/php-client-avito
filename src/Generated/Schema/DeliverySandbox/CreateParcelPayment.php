<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelPayment.
 */
class CreateParcelPayment extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['delivery' => 'delivery', 'items' => 'items'];

    protected const REQUIRED_FIELDS = ['items', 'delivery'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed> Schema field delivery */
    public array $delivery;

    /** @var array<string, mixed> Schema field items */
    public array $items;
}
