<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierCoordinates.
 */
class CreateParcelCourierCoordinates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['latitude' => 'latitude', 'longitude' => 'longitude'];

    protected const REQUIRED_FIELDS = ['latitude', 'longitude'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Географическая широта, в градусах. */
    public float $latitude;

    /** @var float Географическая долгота, в градусах. */
    public float $longitude;
}
