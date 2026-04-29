<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/CategoryTreeOut.
 */
class CategoryTreeOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\CategoryNode::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\CategoryNode> Schema field categories */
    public array $categories;
}
