<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ResponseMonitoringGetRegActions.
 */
class ResponseMonitoringGetRegActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['data', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction> Массив рег. действий */
    public array $data;

    /** @var array<string, mixed> Объект, отвечающий за постраничное считывание информации */
    public array $pagination;
}
