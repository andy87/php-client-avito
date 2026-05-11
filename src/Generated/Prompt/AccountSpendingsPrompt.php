<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v2/accounts/{user_id}/spendings.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/accountSpendings
 */
class AccountSpendingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/stats/v2/accounts/{user_id}/spendings';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'filter' => 'filter', 'grouping' => 'grouping', 'spendingTypes' => 'spendingTypes'];

    protected const REQUIRED_FIELDS = ['user_id', 'dateFrom', 'dateTo', 'grouping', 'spendingTypes'];

    protected const NULLABLE_FIELDS = ['filter'];

    protected const CASTS = ['grouping' => \and_y87\php_client_avito\Generated\Schema\Item\SpendingsGroupings::class];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'filter', 'grouping', 'spendingTypes'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var string Дата начала периода статистики расходов в формате YYYY-MM-DD */
    public string $dateFrom;

    /** @var string Дата конца периода статистики расходов в формате YYYY-MM-DD */
    public string $dateTo;

    /** @var array<string, mixed>|null Набор ограничений, по которым необходимо отфильтровать расходы */
    public ?array $filter = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\SpendingsGroupings Body field grouping */
    public \and_y87\php_client_avito\Generated\Schema\Item\SpendingsGroupings $grouping;

    /** @var array<int, string> Набор необходимых типов расходов */
    public array $spendingTypes;
}
