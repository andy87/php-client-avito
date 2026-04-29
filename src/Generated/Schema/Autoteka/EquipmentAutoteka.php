<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EquipmentAutoteka.
 */
class EquipmentAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['body' => 'body', 'bodyNumber' => 'bodyNumber', 'brand' => 'brand', 'chasisNumber' => 'chasisNumber', 'color' => 'color', 'drive' => 'drive', 'engineNumber' => 'engineNumber', 'engineType' => 'engineType', 'equipment' => 'equipment', 'horsepower' => 'horsepower', 'maxWeight' => 'maxWeight', 'model' => 'model', 'modification' => 'modification', 'netWeight' => 'netWeight', 'transmission' => 'transmission', 'vehicle' => 'vehicle', 'vehicleCategory' => 'vehicleCategory', 'vehicleType' => 'vehicleType', 'volume' => 'volume', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['vehicle', 'vehicleType', 'drive', 'modification', 'transmission', 'brand', 'model', 'year', 'body', 'volume', 'horsepower', 'engineType', 'maxWeight', 'netWeight', 'color', 'equipment', 'vehicleCategory', 'bodyNumber', 'engineNumber', 'chasisNumber'];

    protected const NULLABLE_FIELDS = ['bodyNumber', 'chasisNumber', 'engineNumber'];

    protected const CASTS = [];

    /** @var array<string, mixed> Тип кузова */
    public array $body;

    /** @var array<string, mixed>|null Schema field bodyNumber */
    public ?array $bodyNumber;

    /** @var array<string, mixed> Бренд */
    public array $brand;

    /** @var array<string, mixed>|null Schema field chasisNumber */
    public ?array $chasisNumber;

    /** @var array<string, mixed> Цвет кузова */
    public array $color;

    /** @var array<string, mixed> Привод */
    public array $drive;

    /** @var array<string, mixed>|null Schema field engineNumber */
    public ?array $engineNumber;

    /** @var array<string, mixed> Тип двигателя */
    public array $engineType;

    /** @var array<string, mixed> Название комплектации */
    public array $equipment;

    /** @var array<string, mixed> Количество лошадиных сил */
    public array $horsepower;

    /** @var array<string, mixed> Разрешенная максимальная масса */
    public array $maxWeight;

    /** @var array<string, mixed> Модель */
    public array $model;

    /** @var array<string, mixed> Модификация */
    public array $modification;

    /** @var array<string, mixed> Масса без нагрузки */
    public array $netWeight;

    /** @var array<string, mixed> Тип КПП */
    public array $transmission;

    /** @var array<string, mixed> Тип ТС */
    public array $vehicle;

    /** @var array<string, mixed> Категория ТС */
    public array $vehicleCategory;

    /** @var array<string, mixed> Тип ТС */
    public array $vehicleType;

    /** @var array<string, mixed> Объем двигателя */
    public array $volume;

    /** @var array<string, mixed> Год выпуска */
    public array $year;
}
