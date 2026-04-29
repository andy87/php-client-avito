<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIDependencyPair.
 */
class APIDependencyPair extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['clause' => 'clause', 'source_field_tag' => 'source_field_tag', 'values' => 'values'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Schema field clause */
    public ?string $clause = null;

    /** @var string|null Schema field source_field_tag */
    public ?string $source_field_tag = null;

    /** @var array<int, string>|null Schema field values */
    public ?array $values = null;
}
