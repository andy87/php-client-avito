<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoteka\Monitoring;

use and_y87\php_client_avito\Generated\Response\MonitoringGetRegActionsResponse as BaseMonitoringGetRegActionsResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/monitoring/get-reg-actions/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringGetRegActions
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction> $data Массив рег. действий
 * @property array<string, mixed> $pagination Объект, отвечающий за постраничное считывание информации
 */
class GetRegActionsResponse extends BaseMonitoringGetRegActionsResponse
{
}
