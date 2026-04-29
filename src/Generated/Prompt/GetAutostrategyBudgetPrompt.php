<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * DTO запроса Avito API getAutostrategyBudget.
 */
class GetAutostrategyBudgetPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/autostrategy/v1/budget';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['campaignType' => 'campaignType', 'finishTime' => 'finishTime', 'items' => 'items', 'startTime' => 'startTime'];

    protected const REQUIRED_FIELDS = ['campaignType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['campaignType', 'finishTime', 'items', 'startTime'];

    /** @var string Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/> */
    public string $campaignType;

    /** @var string|null Время окончания кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $finishTime = null;

    /** @var array<int, int>|null Список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании. <br/>**Обязательно только для типа кампании `AS`** */
    public ?array $items = null;

    /** @var string|null Время начала кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $startTime = null;
}
