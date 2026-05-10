<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliverySecondPartyLogist.
 */
class CreateParcelClientDeliverySecondPartyLogist extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код службы доставки. */
    public string $provider;
}
