<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\OrderManagement;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
