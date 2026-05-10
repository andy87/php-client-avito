<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/VacancyStatusesBody.
 */
class VacancyStatusesBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['ids' => 'ids'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null Schema field ids */
    public ?array $ids = null;
}
