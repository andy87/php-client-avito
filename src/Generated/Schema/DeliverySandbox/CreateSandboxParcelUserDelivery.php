<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateSandboxParcelUserDelivery.
 */
class CreateSandboxParcelUserDelivery extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['terminal' => 'terminal'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['terminal' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal|null Schema field terminal */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelUserDeliveryTerminal $terminal = null;
}
