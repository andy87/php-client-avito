<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelReceiverDelivery.
 */
class CreateSandboxParcelReceiverDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['courier' => 'courier', 'terminal' => 'terminal'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['courier' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier::class, 'terminal' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier|null Schema field courier */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelDeliveryCourier $courier = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal|null Schema field terminal */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal $terminal = null;
}
