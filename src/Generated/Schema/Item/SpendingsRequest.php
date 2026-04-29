<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/SpendingsRequest.
 */
class SpendingsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'filter' => 'filter', 'grouping' => 'grouping', 'spendingTypes' => 'spendingTypes'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo', 'spendingTypes', 'grouping'];

    protected const NULLABLE_FIELDS = ['filter'];

    protected const CASTS = ['grouping' => \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings::class];

    /** @var string Дата начала периода статистики расходов в формате YYYY-MM-DD */
    public string $dateFrom;

    /** @var string Дата конца периода статистики расходов в формате YYYY-MM-DD */
    public string $dateTo;

    /** @var array<string, mixed>|null Набор ограничений, по которым необходимо отфильтровать расходы */
    public ?array $filter = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings Schema field grouping */
    public \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings $grouping;

    /** @var array<int, string> Набор необходимых типов расходов */
    public array $spendingTypes;
}
