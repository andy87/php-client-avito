<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/CreateCampaignRequestBody.
 */
class CreateCampaignRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['budget' => 'budget', 'budgetBonus' => 'budgetBonus', 'budgetReal' => 'budgetReal', 'calcId' => 'calcId', 'campaignType' => 'campaignType', 'description' => 'description', 'finishTime' => 'finishTime', 'items' => 'items', 'startTime' => 'startTime', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['campaignType', 'title'];

    protected const NULLABLE_FIELDS = ['calcId'];

    protected const CASTS = [];

    /** @var int|null Выделенный бюджет на кампанию в рублях.<br/>**Обязательно только для типа кампании `AS`** */
    public ?int $budget = null;

    /** @var int|null Бонусная часть бюджета, в рублях, которая спишется засчет бонусов.<br/>**Может быть только для типа кампании `AP`** */
    public ?int $budgetBonus = null;

    /** @var int|null Часть бюджета на кампанию в рублях.<br/>**Обязательно только для типа кампании `AP`** */
    public ?int $budgetReal = null;

    /** @var int|null Идентфикатор расчета бюджета из ответа ручки `/autostrategy/v1/budget` */
    public ?int $calcId = null;

    /** @var string Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/> */
    public string $campaignType;

    /** @var string|null Описание кампании */
    public ?string $description = null;

    /** @var string|null Время окончания кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $finishTime = null;

    /** @var array<int, int>|null Список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?array $items = null;

    /** @var string|null Время начала кампании.<br/>**Обязательно только для типа кампании `AS`** */
    public ?string $startTime = null;

    /** @var string Название кампании */
    public string $title;
}
