<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Diagnostics.
 */
class Diagnostics extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'requestTime'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEvent::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\DiagnosticsEvent> Список диагностических осмотров */
    public array $events;

    /** @var int Дата актуализации данных */
    public int $requestTime;
}
