<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ExtendedSpecifications.
 */
class ExtendedSpecifications extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'requestTime'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\ExtendedSpecificationsParam::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ExtendedSpecificationsParam> Список параметров. Количество обозначенных параметров может быть различным в разных отчетах. */
    public array $events;

    /** @var int Дата запроса к источнику UnixTime */
    public int $requestTime;
}
