<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * DTO ответа Avito API monitoringGetRegActions.
 */
class MonitoringGetRegActionsResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['data' => 'data', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['data', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseMonitoringGetRegActions::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction> Массив рег. действий */
    public array $data;

    /** @var array<string, mixed> Объект, отвечающий за постраничное считывание информации */
    public array $pagination;
}
