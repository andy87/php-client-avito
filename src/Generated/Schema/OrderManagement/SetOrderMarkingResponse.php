<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\OrderManagement;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito order-management/setOrderMarkingResponse.
 */
class SetOrderMarkingResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['results' => 'results'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Массив результатов обновления */
    public ?array $results = null;
}
