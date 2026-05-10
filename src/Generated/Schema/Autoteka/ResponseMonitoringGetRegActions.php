<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ResponseMonitoringGetRegActions.
 */
class ResponseMonitoringGetRegActions extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = ['data', 'pagination'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => [\php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\ResponseMonitoringGetRegAction> Массив рег. действий */
    public array $data;

    /** @var array<string, mixed> Объект, отвечающий за постраничное считывание информации */
    public array $pagination;
}
