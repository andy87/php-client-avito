<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/AgeCriteria.
 */
class AgeCriteria extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['from' => 'from', 'to' => 'to'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['from', 'to'];

    protected const CASTS = [];

    /** @var int|null Schema field from */
    public ?int $from = null;

    /** @var int|null Schema field to */
    public ?int $to = null;
}
