<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
