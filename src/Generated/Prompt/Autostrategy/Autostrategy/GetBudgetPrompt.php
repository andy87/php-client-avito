<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autostrategy\Autostrategy;

use php_client_avito\Generated\Prompt\GetAutostrategyBudgetPrompt as BaseGetAutostrategyBudgetPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/budget.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyBudget
 *
 * @property string $campaignType Тип кампании. Возможные типы:<br/> `AS` - Автостратегия. Cтратегия расчитана на определенное количество автомобилей, которые находятся в продаже<br/> `AP` - Автопилот. Cтратегия расчитана на все автомобили, которые находятся в продаже<br/>
 * @property string|null $finishTime Время окончания кампании.<br/>**Обязательно только для типа кампании `AS`**
 * @property array<int, int>|null $items Список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании. <br/>**Обязательно только для типа кампании `AS`**
 * @property string|null $startTime Время начала кампании.<br/>**Обязательно только для типа кампании `AS`**
 */
class GetBudgetPrompt extends BaseGetAutostrategyBudgetPrompt
{
}
