<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Diagnostics.
 */
class Diagnostics extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['events' => 'events', 'requestTime' => 'requestTime'];

    protected const REQUIRED_FIELDS = ['events', 'requestTime'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['events' => [\php_client_avito\Generated\Schema\Autoteka\DiagnosticsEvent::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\DiagnosticsEvent> Список диагностических осмотров */
    public array $events;

    /** @var int Дата актуализации данных */
    public int $requestTime;
}
