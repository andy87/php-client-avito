<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/AvitoPriceValuation.
 */
class AvitoPriceValuation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['avgMarketPrice' => 'avgMarketPrice', 'avgMileage' => 'avgMileage', 'avgPriceWithCondition' => 'avgPriceWithCondition', 'avgYear' => 'avgYear', 'imvUrl' => 'imvUrl', 'itemsCount' => 'itemsCount', 'marketNormalPriceRange' => 'marketNormalPriceRange', 'maxPrice' => 'maxPrice', 'minPrice' => 'minPrice'];

    protected const REQUIRED_FIELDS = ['avgPriceWithCondition'];

    protected const NULLABLE_FIELDS = ['avgMarketPrice', 'avgMileage', 'avgYear', 'imvUrl', 'itemsCount', 'marketNormalPriceRange', 'maxPrice', 'minPrice'];

    protected const CASTS = [];

    /** @var int|null Оценка на основе объявлений */
    public ?int $avgMarketPrice = null;

    /** @var int|null Средний пробег аналогов */
    public ?int $avgMileage = null;

    /** @var int Оценка с учетом состояния автомобилей на основе реальных сделок */
    public int $avgPriceWithCondition;

    /** @var float|null Средний год выпуска аналогов */
    public ?float $avgYear = null;

    /** @var string|null Ссылка на страницу Авито IMV вида https://www.avito.ru/au-imv-info/2963331288 */
    public ?string $imvUrl = null;

    /** @var int|null Количество машин, учтенных в оценке */
    public ?int $itemsCount = null;

    /** @var array<string, mixed>|null Диапазон "рыночной" оценки данного автомобиля по закрытым сделкам */
    public ?array $marketNormalPriceRange = null;

    /** @var int|null Максимальная цена похожих авто на основе объявлений */
    public ?int $maxPrice = null;

    /** @var int|null Минимальная цена похожих авто на основе объявлений */
    public ?int $minPrice = null;
}
