<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API accountSpendings.
 */
class AccountSpendingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/stats/v2/accounts/{user_id}/spendings';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'filter' => 'filter', 'grouping' => 'grouping', 'spendingTypes' => 'spendingTypes'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo', 'grouping', 'spendingTypes'];

    protected const NULLABLE_FIELDS = ['filter'];

    protected const CASTS = ['grouping' => \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings::class];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'filter', 'grouping', 'spendingTypes'];

    /** @var string Дата начала периода статистики расходов в формате YYYY-MM-DD */
    public string $dateFrom;

    /** @var string Дата конца периода статистики расходов в формате YYYY-MM-DD */
    public string $dateTo;

    /** @var array<string, mixed>|null Набор ограничений, по которым необходимо отфильтровать расходы */
    public ?array $filter = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings Body field grouping */
    public \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings $grouping;

    /** @var array<int, string> Набор необходимых типов расходов */
    public array $spendingTypes;
}
