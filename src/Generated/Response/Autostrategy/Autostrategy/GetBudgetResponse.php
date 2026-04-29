<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Response\GetAutostrategyBudgetResponse as BaseGetAutostrategyBudgetResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/budget.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyBudget
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Budget|null $budget Response field budget
 * @property int|null $calcId Id расчета бюджета
 */
class GetBudgetResponse extends BaseGetAutostrategyBudgetResponse
{
}
