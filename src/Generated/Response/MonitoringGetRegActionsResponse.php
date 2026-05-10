<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoteka/v1/monitoring/get-reg-actions/.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoteka/documentation#operation/monitoringGetRegActions
 */
class MonitoringGetRegActionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['data', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegActions::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction> Массив рег. действий */
    public array $data;

    /** @var array<string, mixed> Объект, отвечающий за постраничное считывание информации */
    public array $pagination;
}
