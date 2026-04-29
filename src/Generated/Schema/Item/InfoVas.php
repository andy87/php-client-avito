<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/InfoVas.
 */
class InfoVas extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['finish_time' => 'finish_time', 'schedule' => 'schedule', 'vas_id' => 'vas_id'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['finish_time', 'schedule'];

    protected const CASTS = [];

    /** @var string|null Дата завершения услуги */
    public ?string $finish_time = null;

    /** @var array<int, string>|null Информация о следующих применениях услуги */
    public ?array $schedule = null;

    /** @var string|null Идентификатор услуги */
    public ?string $vas_id = null;
}
