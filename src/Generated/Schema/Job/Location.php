<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Location.
 */
class Location extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int|null Schema field id */
    public ?int $id = null;

    /** @var string|null Schema field title */
    public ?string $title = null;
}
