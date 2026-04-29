<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/cancelParcelRequest.
 */
class CancelParcelRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['actor' => 'actor', 'parcelID' => 'parcelID'];

    protected const REQUIRED_FIELDS = ['parcelID', 'actor'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['parcelID' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString::class];

    /** @var string Кто отменяет посылку */
    public string $actor;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString Schema field parcelID */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryOrderIdString $parcelID;
}
