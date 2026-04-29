<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/VehicleSpecifications.
 */
class VehicleSpecifications extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'requestTime'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\VehicleSpecificationsParam::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\VehicleSpecificationsParam> Список параметров спецификации */
    public array $events;

    /** @var int Дата запроса к источнику UnixTime */
    public int $requestTime;
}
