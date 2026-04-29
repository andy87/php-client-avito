<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryTerminal.
 */
class CreateParcelClientDeliveryTerminal extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['accuracy' => 'accuracy', 'id' => 'id', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider', 'id', 'accuracy'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['accuracy' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy Schema field accuracy */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelPropertyAccuracy $accuracy;

    /** @var string Идентификатор ПВЗ по версии службы доставки владельца. */
    public string $id;

    /** @var string Идентификатор службы доставки владельца ПВЗ. */
    public string $provider;
}
