<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/FieldValueRange.
 */
class FieldValueRange extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['max' => 'max', 'min' => 'min'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['max', 'min'];

    protected const CASTS = [];

    /** @var int|null Schema field max */
    public ?int $max = null;

    /** @var int|null Schema field min */
    public ?int $min = null;
}
