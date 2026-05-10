<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autostrategy\Autostrategy;

use php_client_avito\Generated\Response\GetAutostrategyBudgetResponse as BaseGetAutostrategyBudgetResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/budget.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyBudget
 *
 * @property \php_client_avito\Generated\Schema\Autostrategy\Budget|null $budget Response field budget
 * @property int|null $calcId Id расчета бюджета
 */
class GetBudgetResponse extends BaseGetAutostrategyBudgetResponse
{
}
