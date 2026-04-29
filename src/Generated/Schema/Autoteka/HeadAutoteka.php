<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/HeadAutoteka.
 */
class HeadAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['brand' => 'brand', 'createdAt' => 'createdAt', 'model' => 'model', 'regNumber' => 'regNumber', 'regNumbersHistory' => 'regNumbersHistory', 'vehicleIdentifierType' => 'vehicleIdentifierType', 'vin' => 'vin', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['brand', 'model', 'year', 'vin', 'createdAt'];

    protected const NULLABLE_FIELDS = ['regNumber', 'regNumbersHistory'];

    protected const CASTS = [];

    /** @var string Марка */
    public string $brand;

    /** @var int Время генерации отчета в формате Unix time */
    public int $createdAt;

    /** @var string Модель */
    public string $model;

    /** @var string|null Государственный номер авто */
    public ?string $regNumber = null;

    /** @var array<int, array<string, mixed>>|null История государственных номеров авто */
    public ?array $regNumbersHistory = null;

    /** @var string|null тип идентификатора авто */
    public ?string $vehicleIdentifierType = null;

    /** @var string VIN */
    public string $vin;

    /** @var int Год выпуска */
    public int $year;
}
