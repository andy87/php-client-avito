<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestByVinAutoteka.
 */
class RequestByVinAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vin' => 'vin'];

    protected const REQUIRED_FIELDS = ['vin'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string VIN или номер кузова запрашиваемого авто. */
    public string $vin;
}
