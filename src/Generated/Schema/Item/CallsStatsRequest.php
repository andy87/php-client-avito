<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/CallsStatsRequest.
 */
class CallsStatsRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Начальная дата периода (YYYY-MM-DD) */
    public string $dateFrom;

    /** @var string Конечная дата периода (YYYY-MM-DD) */
    public string $dateTo;

    /** @var array<int, int>|null Идентификаторы объявлений */
    public ?array $itemIds = null;
}
