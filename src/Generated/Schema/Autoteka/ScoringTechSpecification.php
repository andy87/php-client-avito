<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringTechSpecification.
 */
class ScoringTechSpecification extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bodyNumber' => 'bodyNumber', 'brand' => 'brand', 'chasisNumber' => 'chasisNumber', 'color' => 'color', 'engineNumber' => 'engineNumber', 'engineType' => 'engineType', 'horsepower' => 'horsepower', 'maxWeight' => 'maxWeight', 'model' => 'model', 'netWeight' => 'netWeight', 'vehicleCategory' => 'vehicleCategory', 'vehicleType' => 'vehicleType', 'volume' => 'volume', 'year' => 'year'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['bodyNumber', 'brand', 'chasisNumber', 'color', 'engineNumber', 'engineType', 'horsepower', 'maxWeight', 'model', 'netWeight', 'vehicleCategory', 'vehicleType', 'volume', 'year'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field bodyNumber */
    public ?array $bodyNumber = null;

    /** @var array<string, mixed>|null Бренд */
    public ?array $brand = null;

    /** @var array<string, mixed>|null Schema field chasisNumber */
    public ?array $chasisNumber = null;

    /** @var array<string, mixed>|null Цвет кузова */
    public ?array $color = null;

    /** @var array<string, mixed>|null Schema field engineNumber */
    public ?array $engineNumber = null;

    /** @var array<string, mixed>|null Тип двигателя */
    public ?array $engineType = null;

    /** @var array<string, mixed>|null Количество лошадиных сил */
    public ?array $horsepower = null;

    /** @var array<string, mixed>|null Разрешенная максимальная масса */
    public ?array $maxWeight = null;

    /** @var array<string, mixed>|null Модель */
    public ?array $model = null;

    /** @var array<string, mixed>|null Масса без нагрузки */
    public ?array $netWeight = null;

    /** @var array<string, mixed>|null Категория ТС */
    public ?array $vehicleCategory = null;

    /** @var array<string, mixed>|null Тип ТС */
    public ?array $vehicleType = null;

    /** @var array<string, mixed>|null Объем двигателя */
    public ?array $volume = null;

    /** @var array<string, mixed>|null Год выпуска */
    public ?array $year = null;
}
