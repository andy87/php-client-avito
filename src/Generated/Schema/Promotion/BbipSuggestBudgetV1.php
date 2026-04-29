<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipSuggestBudgetV1.
 */
class BbipSuggestBudgetV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isRecommended' => 'isRecommended', 'oldPrice' => 'oldPrice', 'price' => 'price'];

    protected const REQUIRED_FIELDS = ['price', 'oldPrice'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var bool|null Рекомендуемый вариант бюджета */
    public ?bool $isRecommended = null;

    /** @var int Общая ценность продвижения за один день до применения скидок и акций (в копейках) */
    public int $oldPrice;

    /** @var int Стоимость продвижения за один день (в копейках) */
    public int $price;
}
