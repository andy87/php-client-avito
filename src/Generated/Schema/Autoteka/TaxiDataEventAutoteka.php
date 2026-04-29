<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TaxiDataEventAutoteka.
 */
class TaxiDataEventAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'isActual' => 'isActual', 'permitNumber' => 'permitNumber', 'regionName' => 'regionName'];

    protected const REQUIRED_FIELDS = ['regionName', 'permitNumber', 'dateFrom', 'isActual'];

    protected const NULLABLE_FIELDS = ['dateTo'];

    protected const CASTS = [];

    /** @var int Дата начала действия разрешения в UnixTime */
    public int $dateFrom;

    /** @var int|null Дата окончания действия разрешения в UnixTime */
    public ?int $dateTo = null;

    /** @var bool Признак действующего разрешения */
    public bool $isActual;

    /** @var string Номер разрешения */
    public string $permitNumber;

    /** @var string Регион */
    public string $regionName;
}
