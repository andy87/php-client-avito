<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/FieldValue.
 */
class FieldValue extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['description' => 'description', 'value' => 'value'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Опциональное описание значения */
    public ?string $description = null;

    /** @var string|null Текстовое значение */
    public ?string $value = null;
}
