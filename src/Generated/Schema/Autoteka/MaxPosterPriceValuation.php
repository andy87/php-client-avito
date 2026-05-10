<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/MaxPosterPriceValuation.
 */
class MaxPosterPriceValuation extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['analyticByActualSales' => 'analyticByActualSales', 'analyticByCompletedSales' => 'analyticByCompletedSales', 'liquidity' => 'liquidity'];

    protected const REQUIRED_FIELDS = ['analyticByCompletedSales', 'liquidity'];

    protected const NULLABLE_FIELDS = ['analyticByActualSales'];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Аналитика стоимости на основе текущих размещений на рынке */
    public ?array $analyticByActualSales = null;

    /** @var array<string, mixed> Аналитика стоимости на основе реальных сделок */
    public array $analyticByCompletedSales;

    /** @var array<string, mixed> Ликвидность и другие показатели оборачиваемости автомобиля */
    public array $liquidity;
}
