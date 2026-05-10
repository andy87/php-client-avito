<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TechInspectionHistory.
 */
class TechInspectionHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events'];

    protected const REQUIRED_FIELDS = ['events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistoryEvent::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\TechInspectionHistoryEvent> Список записей о прохождении тех. осмотра */
    public array $events;
}
