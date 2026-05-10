<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ApplicationsGetStatesResult.
 */
class ApplicationsGetStatesResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['states' => 'states'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Список возможных статусов откликов */
    public ?array $states = null;
}
