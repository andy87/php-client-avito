<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ExternalPlacementAutoteka.
 */
class ExternalPlacementAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'date' => 'date', 'isCrashed' => 'isCrashed', 'mileage' => 'mileage', 'price' => 'price', 'region' => 'region', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['date', 'price', 'mileage', 'region', 'city', 'url', 'isCrashed'];

    protected const NULLABLE_FIELDS = ['city', 'mileage', 'price', 'region'];

    protected const CASTS = [];

    /** @var string|null Город */
    public ?string $city;

    /** @var string Дата публикации */
    public string $date;

    /** @var bool Битое авто */
    public bool $isCrashed;

    /** @var int|null Пробег */
    public ?int $mileage;

    /** @var int|null Цена */
    public ?int $price;

    /** @var string|null Регион */
    public ?string $region;

    /** @var string Ссылка на размещение */
    public string $url;
}
