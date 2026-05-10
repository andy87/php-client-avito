<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Promotion;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipForecastRequestByItemV1.
 */
class BbipForecastRequestByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['duration' => 'duration', 'itemId' => 'itemId', 'oldPrice' => 'oldPrice', 'price' => 'price'];

    protected const REQUIRED_FIELDS = ['itemId', 'duration', 'oldPrice', 'price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Период в днях, для которого запрашивается прогноз */
    public int $duration;

    /** @var int Идентификатор объявления */
    public int $itemId;

    /** @var int Общая ценность продвижения за один день (в копейках) */
    public int $oldPrice;

    /** @var int Стоимость продвижения за один день (в копейках) */
    public int $price;
}
