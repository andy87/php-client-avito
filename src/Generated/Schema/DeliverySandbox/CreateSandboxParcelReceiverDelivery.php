<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelReceiverDelivery.
 */
class CreateSandboxParcelReceiverDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['courier' => 'courier', 'terminal' => 'terminal'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['courier' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier::class, 'terminal' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier|null Schema field courier */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier $courier = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal|null Schema field terminal */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal $terminal = null;
}
