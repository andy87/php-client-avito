<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoload;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APICategoryNode.
 */
class APICategoryNode extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'nested' => 'nested', 'slug' => 'slug'];

    protected const REQUIRED_FIELDS = ['name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Название категории */
    public string $name;

    /** @var array<int, mixed>|null Дочерние категории */
    public ?array $nested = null;

    /** @var string|null Slug категории для получения полей */
    public ?string $slug = null;
}
