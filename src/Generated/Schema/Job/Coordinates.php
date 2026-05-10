<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Coordinates.
 */
class Coordinates extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['latitude' => 'latitude', 'longitude' => 'longitude'];

    protected const REQUIRED_FIELDS = ['latitude', 'longitude'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var float Широта */
    public float $latitude;

    /** @var float Долгота */
    public float $longitude;
}
