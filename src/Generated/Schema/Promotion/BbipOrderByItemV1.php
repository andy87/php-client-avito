<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipOrderByItemV1.
 */
class BbipOrderByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['duration' => 'duration', 'itemId' => 'itemId', 'oldPrice' => 'oldPrice', 'price' => 'price'];

    protected const REQUIRED_FIELDS = ['itemId', 'duration', 'oldPrice', 'price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Период действия продвижения в днях */
    public int $duration;

    /** @var int Идентификатор объявления */
    public int $itemId;

    /** @var int Общая ценность продвижения за один день (в копейках) */
    public int $oldPrice;

    /** @var int Стоимость продвижения за один день (в копейках) */
    public int $price;
}
