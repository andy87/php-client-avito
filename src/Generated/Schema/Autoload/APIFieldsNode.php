<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIFieldsNode.
 */
class APIFieldsNode extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'slug' => 'slug'];

    protected const REQUIRED_FIELDS = ['name', 'slug'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Название категории */
    public string $name;

    /** @var string Уникальный идентификатор категории (slug) */
    public string $slug;
}
