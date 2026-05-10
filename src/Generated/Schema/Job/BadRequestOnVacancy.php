<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Job;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/BadRequestOnVacancy.
 */
class BadRequestOnVacancy extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['errors' => 'errors'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, string>|null Schema field errors */
    public ?array $errors = null;
}
