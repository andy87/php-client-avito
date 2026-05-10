<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelUserDelivery.
 */
class CreateSandboxParcelUserDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['terminal' => 'terminal'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['terminal' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal|null Schema field terminal */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal $terminal = null;
}
