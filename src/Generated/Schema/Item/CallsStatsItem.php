<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/CallsStatsItem.
 */
class CallsStatsItem extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['days' => 'days', 'employeeId' => 'employeeId', 'itemId' => 'itemId'];

    protected const REQUIRED_FIELDS = ['employeeId', 'itemId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['days' => [\php_client_avito\Generated\Schema\Item\CallsStatsDay::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Item\CallsStatsDay>|null Массив статистики звонков объявления в разрезе дней */
    public ?array $days = null;

    /** @var int Идентификатор сотрудника в сервисе иерархии аккаунтов (0 означает, что звонок не аттрибуцирован до сотрудника) */
    public int $employeeId;

    /** @var int Идентификатор объявления (0 означает, что звонок не аттрибуцирован до объявления) */
    public int $itemId;
}
