<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Str;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/PostCalendarData.
 */
class PostCalendarData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['bookings' => 'bookings', 'source' => 'source'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['source'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список броней для выбранного объекта недвижимости (объявления) */
    public ?array $bookings = null;

    /** @var string|null Название PMS системы */
    public ?string $source = null;
}
