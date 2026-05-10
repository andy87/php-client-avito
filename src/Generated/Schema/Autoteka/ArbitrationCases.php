<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ArbitrationCases.
 */
class ArbitrationCases extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['cases' => 'cases'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Schema field cases */
    public ?array $cases = null;
}
