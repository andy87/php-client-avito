<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

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
