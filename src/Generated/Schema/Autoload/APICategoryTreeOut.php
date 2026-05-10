<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoload;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APICategoryTreeOut.
 */
class APICategoryTreeOut extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['categories' => 'categories'];

    protected const REQUIRED_FIELDS = ['categories'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['categories' => [\php_client_avito\Generated\Schema\Autoload\APICategoryNode::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoload\APICategoryNode> Schema field categories */
    public array $categories;
}
