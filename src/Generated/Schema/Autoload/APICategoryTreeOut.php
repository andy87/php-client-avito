<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APICategoryTreeOut.
 */
class APICategoryTreeOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [APICategoryNode::class]];

    /** @var array<int, APICategoryNode> Schema field categories */
    public array $categories;
}
