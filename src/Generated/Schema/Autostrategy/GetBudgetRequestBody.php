<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/GetBudgetRequestBody.
 */
class GetBudgetRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaignType' => 'campaignType', 'finishTime' => 'finishTime', 'items' => 'items', 'startTime' => 'startTime'];

    protected const REQUIRED_FIELDS = ['campaignType'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/> */
    public string $campaignType;

    /** @var string|null Время окончания кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $finishTime = null;

    /** @var array<int, int>|null Список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании. <br/>**Обязательно только для типа кампании `AS`** */
    public ?array $items = null;

    /** @var string|null Время начала кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $startTime = null;
}
