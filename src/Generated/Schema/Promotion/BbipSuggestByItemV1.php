<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Promotion;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito promotion/BbipSuggestByItemV1.
 */
class BbipSuggestByItemV1 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budgets' => 'budgets', 'duration' => 'duration', 'itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['itemId', 'duration', 'budgets'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['budgets' => [\and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestBudgetV1::class], 'duration' => \and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1::class];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestBudgetV1> Schema field budgets */
    public array $budgets;

    /** @var \and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1 Schema field duration */
    public \and_y87\php_client_avito\Generated\Schema\Promotion\BbipSuggestDurationRangeV1 $duration;

    /** @var int Идентификатор объявления */
    public int $itemId;
}
