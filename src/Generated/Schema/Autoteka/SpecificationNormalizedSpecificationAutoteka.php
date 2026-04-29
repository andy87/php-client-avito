<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/SpecificationNormalizedSpecificationAutoteka.
 */
class SpecificationNormalizedSpecificationAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bodyType' => 'bodyType', 'brand' => 'brand', 'capacity' => 'capacity', 'complectation' => 'complectation', 'doorsCount' => 'doorsCount', 'drive' => 'drive', 'engine' => 'engine', 'engineType' => 'engineType', 'generation' => 'generation', 'model' => 'model', 'modification' => 'modification', 'transmission' => 'transmission', 'wheel' => 'wheel', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['brand', 'model', 'bodyType', 'doorsCount', 'drive', 'wheel', 'engineType', 'engine', 'capacity', 'transmission', 'generation', 'modification', 'complectation', 'year'];

    protected const NULLABLE_FIELDS = ['bodyType', 'brand', 'capacity', 'complectation', 'doorsCount', 'drive', 'engine', 'engineType', 'generation', 'model', 'modification', 'transmission', 'wheel', 'year'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Кузов */
    public ?array $bodyType;

    /** @var array<string, mixed>|null Бренд */
    public ?array $brand;

    /** @var array<string, mixed>|null Емкость */
    public ?array $capacity;

    /** @var array<string, mixed>|null Комплектация */
    public ?array $complectation;

    /** @var array<string, mixed>|null Количество дверей */
    public ?array $doorsCount;

    /** @var array<string, mixed>|null Привод */
    public ?array $drive;

    /** @var array<string, mixed>|null Объем двигателя */
    public ?array $engine;

    /** @var array<string, mixed>|null Тип двигателя */
    public ?array $engineType;

    /** @var array<string, mixed>|null Поколение */
    public ?array $generation;

    /** @var array<string, mixed>|null Модель */
    public ?array $model;

    /** @var array<string, mixed>|null Модификация */
    public ?array $modification;

    /** @var array<string, mixed>|null Тип КПП */
    public ?array $transmission;

    /** @var array<string, mixed>|null Руль */
    public ?array $wheel;

    /** @var array<string, mixed>|null Год выпуска */
    public ?array $year;
}
