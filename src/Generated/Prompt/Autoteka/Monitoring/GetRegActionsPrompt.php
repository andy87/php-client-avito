<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Autoteka\Monitoring;

use php_client_avito\Generated\Prompt\MonitoringGetRegActionsPrompt as BaseMonitoringGetRegActionsPrompt;

/**
 * Класс данных запроса Avito API [GET] /autoteka/v1/monitoring/get-reg-actions/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringGetRegActions
 *
 * @property string|null $cursor Позиция курсора
 * @property string|null $operationDateFrom Отбирать рег. действия не раньше указанной даты (включительно)
 * @property int|null $limit Количество строк в результате
 */
class GetRegActionsPrompt extends BaseMonitoringGetRegActionsPrompt
{
}
