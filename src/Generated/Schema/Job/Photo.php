<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Job;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Photo.
 */
class Photo extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['url' => 'url'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field url */
    public ?string $url = null;
}
