<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Promotion;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipSuggestByItemV1.
 */
class BbipSuggestByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgets' => 'budgets', 'duration' => 'duration', 'itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId', 'duration', 'budgets'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['budgets' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestBudgetV1::class], 'duration' => \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestBudgetV1> Schema field budgets */
    public array $budgets;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1 Schema field duration */
    public \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1 $duration;

    /** @var int Идентификатор объявления */
    public int $itemId;
}
