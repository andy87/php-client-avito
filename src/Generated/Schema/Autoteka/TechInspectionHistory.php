<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/TechInspectionHistory.
 */
class TechInspectionHistory extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events'];

    protected const REQUIRED_FIELDS = ['events'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\TechInspectionHistoryEvent::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\TechInspectionHistoryEvent> Список записей о прохождении тех. осмотра */
    public array $events;
}
