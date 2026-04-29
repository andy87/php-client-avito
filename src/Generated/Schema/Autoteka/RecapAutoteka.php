<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RecapAutoteka.
 */
class RecapAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'label' => 'label', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['description', 'label', 'status', 'type'];

    protected const NULLABLE_FIELDS = ['description'];

    protected const CASTS = [];

    /** @var string|null Schema field description */
    public ?string $description;

    /** @var string Schema field label */
    public string $label;

    /** @var string Schema field status */
    public string $status;

    /** @var string Schema field type */
    public string $type;
}
