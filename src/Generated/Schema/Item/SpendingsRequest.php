<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/SpendingsRequest.
 */
class SpendingsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'filter' => 'filter', 'grouping' => 'grouping', 'spendingTypes' => 'spendingTypes'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo', 'spendingTypes', 'grouping'];

    protected const NULLABLE_FIELDS = ['filter'];

    protected const CASTS = ['grouping' => \php_client_avito\Generated\Schema\Item\SpendingsGroupings::class];

    /** @var string Дата начала периода статистики расходов в формате YYYY-MM-DD */
    public string $dateFrom;

    /** @var string Дата конца периода статистики расходов в формате YYYY-MM-DD */
    public string $dateTo;

    /** @var array<string, mixed>|null Набор ограничений, по которым необходимо отфильтровать расходы */
    public ?array $filter = null;

    /** @var \php_client_avito\Generated\Schema\Item\SpendingsGroupings Schema field grouping */
    public \php_client_avito\Generated\Schema\Item\SpendingsGroupings $grouping;

    /** @var array<int, string> Набор необходимых типов расходов */
    public array $spendingTypes;
}
