<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Prompt\CreateAutostrategyCampaignPrompt as BaseCreateAutostrategyCampaignPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaign/create.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/createAutostrategyCampaign
 * 
 * @property int|null $budget Выделенный бюджет на кампанию в рублях.<br/>**Обязательно только для типа кампании `AS`**
 * @property int|null $budgetBonus Бонусная часть бюджета, в рублях, которая спишется засчет бонусов.<br/>**Может быть только для типа кампании `AP`**
 * @property int|null $budgetReal Часть бюджета на кампанию в рублях.<br/>**Обязательно только для типа кампании `AP`**
 * @property int|null $calcId Идентфикатор расчета бюджета из ответа ручки `/autostrategy/v1/budget`
 * @property string $campaignType Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/>
 * @property string|null $description Описание кампании
 * @property string|null $finishTime Время окончания кампании.<br/>**Обязательно только для типа кампании `AS`**
 * @property array<int, int>|null $items Список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании.<br/>**Обязательно только для типа кампании `AS`**
 * @property string|null $startTime Время начала кампании.<br/>**Обязательно только для типа кампании `AS`**
 * @property string $title Название кампании
 */
class CreateCampaignPrompt extends BaseCreateAutostrategyCampaignPrompt
{
}
