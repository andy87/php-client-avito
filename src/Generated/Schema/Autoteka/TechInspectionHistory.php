<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TechInspectionHistory.
 */
class TechInspectionHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events'];

    protected const REQUIRED_FIELDS = ['events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistoryEvent::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\TechInspectionHistoryEvent> Список записей о прохождении тех. осмотра */
    public array $events;
}
