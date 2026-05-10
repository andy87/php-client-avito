<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoload;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/CategoryTreeOut.
 */
class CategoryTreeOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\and_y87\php_client_avito\Generated\Schema\Autoload\CategoryNode::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\CategoryNode> Schema field categories */
    public array $categories;
}
