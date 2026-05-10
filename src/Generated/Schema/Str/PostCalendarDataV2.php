<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Str;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito str/PostCalendarDataV2.
 */
class PostCalendarDataV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['intervals' => 'intervals', 'item_id' => 'item_id', 'source' => 'source'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['source'];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список интервалов для выбранного объявления */
    public ?array $intervals = null;

    /** @var int|null ID объявления */
    public ?int $item_id = null;

    /** @var string|null Название PMS системы */
    public ?string $source = null;
}
