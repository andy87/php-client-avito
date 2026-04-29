<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringPlacements.
 */
class ScoringPlacements extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isActive' => 'isActive', 'lastPlacementDate' => 'lastPlacementDate', 'lastPlacementIsCrashed' => 'lastPlacementIsCrashed', 'lastPlacementPrice' => 'lastPlacementPrice', 'minPrice' => 'minPrice', 'number' => 'number', 'placementsWithCrashesNumber' => 'placementsWithCrashesNumber', 'relevanceDate' => 'relevanceDate'];

    protected const REQUIRED_FIELDS = ['relevanceDate'];

    protected const NULLABLE_FIELDS = ['isActive', 'lastPlacementDate', 'lastPlacementIsCrashed', 'lastPlacementPrice', 'minPrice', 'number', 'placementsWithCrashesNumber'];

    protected const CASTS = [];

    /** @var bool|null Есть активное размещение */
    public ?bool $isActive = null;

    /** @var int|null Дата последнего размещения */
    public ?int $lastPlacementDate = null;

    /** @var bool|null Признак "Битый" в последнем размещении */
    public ?bool $lastPlacementIsCrashed = null;

    /** @var int|null Цена в последнем размещении */
    public ?int $lastPlacementPrice = null;

    /** @var int|null Минимальная цена среди всех размещений */
    public ?int $minPrice = null;

    /** @var int|null Общее количество размещений */
    public ?int $number = null;

    /** @var int|null Количество размещений с меткой "Битый" */
    public ?int $placementsWithCrashesNumber = null;

    /** @var int Дата актуальности данных */
    public int $relevanceDate;
}
