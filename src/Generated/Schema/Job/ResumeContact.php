<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/ResumeContact.
 */
class ResumeContact extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['type' => 'type', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field type */
    public ?string $type = null;

    /** @var string|null Schema field value */
    public ?string $value = null;
}
