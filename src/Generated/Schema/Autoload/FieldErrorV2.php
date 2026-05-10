<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoload;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/FieldErrorV2.
 */
class FieldErrorV2 extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['error' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Schema field error */
    public ?array $error = null;
}
