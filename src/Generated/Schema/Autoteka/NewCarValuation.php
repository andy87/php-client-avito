<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/NewCarValuation.
 */
class NewCarValuation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avgPrice' => 'avgPrice', 'bodyType' => 'bodyType', 'brand' => 'brand', 'complectation' => 'complectation', 'drive' => 'drive', 'engineType' => 'engineType', 'maxPrice' => 'maxPrice', 'medianPrice' => 'medianPrice', 'minPrice' => 'minPrice', 'model' => 'model', 'modification' => 'modification', 'transmission' => 'transmission', 'year' => 'year'];

    protected const REQUIRED_FIELDS = ['brand', 'model', 'year', 'modification', 'bodyType', 'complectation', 'drive', 'transmission', 'engineType', 'avgPrice', 'medianPrice', 'minPrice', 'maxPrice'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Средняя цена на основе объявлений */
    public int $avgPrice;

    /** @var string Тип автомобиля */
    public string $bodyType;

    /** @var string Бренд */
    public string $brand;

    /** @var string Комплектация */
    public string $complectation;

    /** @var string Привод */
    public string $drive;

    /** @var string Тип двигателя */
    public string $engineType;

    /** @var int Максимальная цена на основе объявлений */
    public int $maxPrice;

    /** @var int Средняя цена на основе объявлений */
    public int $medianPrice;

    /** @var int Минимальная цена на основе объявлений */
    public int $minPrice;

    /** @var string Модель */
    public string $model;

    /** @var string Модификация */
    public string $modification;

    /** @var string Коробка передач */
    public string $transmission;

    /** @var int Год выпуска */
    public int $year;
}
