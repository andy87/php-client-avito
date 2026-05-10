<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TaxiDataAutoteka.
 */
class TaxiDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'recaps' => 'recaps', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'recaps'];

    protected const NULLABLE_FIELDS = ['requestTime'];

    protected const CASTS = ['events' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\TaxiDataEventAutoteka::class], 'recaps' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\TaxiDataEventAutoteka> Список записей об использовании в такси */
    public array $events;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var int|null Дата запроса к источнику UnixTime */
    public ?int $requestTime = null;
}
