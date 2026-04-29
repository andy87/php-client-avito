<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipForecastByItemV1.
 */
class BbipForecastByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['itemId' => 'itemId', 'max' => 'max', 'min' => 'min', 'totalOldPrice' => 'totalOldPrice', 'totalPrice' => 'totalPrice'];

    protected const REQUIRED_FIELDS = ['itemId', 'min', 'max', 'totalOldPrice', 'totalPrice'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор объявления */
    public int $itemId;

    /** @var int Ожидаемый максимальный прирост просмотров */
    public int $max;

    /** @var int Ожидаемый минимальный прирост просмотров */
    public int $min;

    /** @var int Общая ценность продвижения за весь период до применения скидок и акций (в копейках) */
    public int $totalOldPrice;

    /** @var int Общая стоимость продвижения за весь период (в копейках) */
    public int $totalPrice;
}
