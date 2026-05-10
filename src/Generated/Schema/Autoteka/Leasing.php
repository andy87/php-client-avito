<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Leasing.
 */
class Leasing extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['contracts' => 'contracts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>>|null Лизинг контракты */
    public ?array $contracts = null;
}
