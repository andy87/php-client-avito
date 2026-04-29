<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
