<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/VehicleSpecifications.
 */
class VehicleSpecifications extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'requestTime'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\VehicleSpecificationsParam::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\VehicleSpecificationsParam> Список параметров спецификации */
    public array $events;

    /** @var int Дата запроса к источнику UnixTime */
    public int $requestTime;
}
