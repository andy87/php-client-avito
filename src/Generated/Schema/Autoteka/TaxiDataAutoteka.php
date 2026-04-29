<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TaxiDataAutoteka.
 */
class TaxiDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'recaps'];

    protected const NULLABLE_FIELDS = ['requestTime'];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\TaxiDataEventAutoteka::class], 'recaps' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\TaxiDataEventAutoteka> Список записей об использовании в такси */
    public array $events;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var int|null Дата запроса к источнику UnixTime */
    public ?int $requestTime = null;
}
