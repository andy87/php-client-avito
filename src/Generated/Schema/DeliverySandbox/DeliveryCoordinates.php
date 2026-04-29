<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Delivery-coordinates.
 */
class DeliveryCoordinates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['lat' => 'lat', 'lng' => 'lng'];

    protected const REQUIRED_FIELDS = ['lat', 'lng'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Географическая широта, в градусах. */
    public float $lat;

    /** @var float Географическая долгота, в градусах. */
    public float $lng;
}
