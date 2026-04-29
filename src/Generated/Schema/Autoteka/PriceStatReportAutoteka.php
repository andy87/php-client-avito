<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PriceStatReportAutoteka.
 */
class PriceStatReportAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['advertsCount' => 'advertsCount', 'averageMileage' => 'averageMileage', 'averageOwnersCount' => 'averageOwnersCount', 'price' => 'price'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['advertsCount', 'averageMileage', 'averageOwnersCount', 'price'];

    protected const CASTS = [];

    /** @var int|null Количество объявлений */
    public ?int $advertsCount = null;

    /** @var int|null Средний пробег */
    public ?int $averageMileage = null;

    /** @var float|null Среднее количество владельцев */
    public ?float $averageOwnersCount = null;

    /** @var array<string, mixed>|null Schema field price */
    public ?array $price = null;
}
