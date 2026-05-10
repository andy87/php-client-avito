<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ResponseGetLeads.
 */
class ResponseGetLeads extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pagination' => 'pagination', 'result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field pagination */
    public ?array $pagination = null;

    /** @var array<int, array<string, mixed>>|null Schema field result */
    public ?array $result = null;
}
