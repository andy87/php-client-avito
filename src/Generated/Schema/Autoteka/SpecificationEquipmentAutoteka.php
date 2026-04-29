<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/SpecificationEquipmentAutoteka.
 */
class SpecificationEquipmentAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bodyNumber' => 'bodyNumber', 'bodyType' => 'bodyType', 'brand' => 'brand', 'color' => 'color', 'engineNumber' => 'engineNumber', 'engineType' => 'engineType', 'horsepower' => 'horsepower', 'maxWeight' => 'maxWeight', 'model' => 'model', 'netWeight' => 'netWeight', 'vehicleCategory' => 'vehicleCategory', 'volume' => 'volume', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['bodyNumber', 'brand', 'color', 'engineNumber', 'engineType', 'horsepower', 'maxWeight', 'model', 'netWeight', 'vehicleCategory', 'bodyType', 'volume', 'year'];

    protected const NULLABLE_FIELDS = ['bodyNumber', 'bodyType', 'brand', 'color', 'engineNumber', 'engineType', 'horsepower', 'maxWeight', 'model', 'netWeight', 'vehicleCategory', 'volume', 'year'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Номер кузова */
    public ?array $bodyNumber;

    /** @var array<string, mixed>|null Тип ТС */
    public ?array $bodyType;

    /** @var array<string, mixed>|null Бренд */
    public ?array $brand;

    /** @var array<string, mixed>|null Цвет кузова */
    public ?array $color;

    /** @var array<string, mixed>|null Номер двигателя */
    public ?array $engineNumber;

    /** @var array<string, mixed>|null Тип двигателя */
    public ?array $engineType;

    /** @var array<string, mixed>|null Количество лошадиных сил */
    public ?array $horsepower;

    /** @var array<string, mixed>|null Разрешенная максимальная масса */
    public ?array $maxWeight;

    /** @var array<string, mixed>|null Модель */
    public ?array $model;

    /** @var array<string, mixed>|null Масса без нагрузки */
    public ?array $netWeight;

    /** @var array<string, mixed>|null Категория ТС */
    public ?array $vehicleCategory;

    /** @var array<string, mixed>|null Объем двигателя */
    public ?array $volume;

    /** @var array<string, mixed>|null Год выпуска */
    public ?array $year;
}
