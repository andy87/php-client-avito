<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Item\Account;

use Andy87\ClientsAvito\Generated\Prompt\AccountSpendingsPrompt as BaseAccountSpendingsPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v2/accounts/{user_id}/spendings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/accountSpendings
 * 
 * @property string $dateFrom Дата начала периода статистики расходов в формате YYYY-MM-DD
 * @property string $dateTo Дата конца периода статистики расходов в формате YYYY-MM-DD
 * @property array<string, mixed>|null $filter Набор ограничений, по которым необходимо отфильтровать расходы
 * @property \Andy87\ClientsAvito\Generated\Schema\Item\SpendingsGroupings $grouping Body field grouping
 * @property array<int, string> $spendingTypes Набор необходимых типов расходов
 */
class SpendingsPrompt extends BaseAccountSpendingsPrompt
{
}
