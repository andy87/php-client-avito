<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/CategoryNode.
 */
class CategoryNode extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'is_support_rus_label' => 'is_support_rus_label', 'name' => 'name', 'nested' => 'nested', 'show_fields' => 'show_fields'];

    protected const REQUIRED_FIELDS = ['name', 'id', 'is_support_rus_label'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['nested' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\CategoryNode::class]];

    /** @var int Id категории */
    public int $id;

    /** @var bool Поддерживается ли русские значения тегов */
    public bool $is_support_rus_label;

    /** @var string Название категории */
    public string $name;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\CategoryNode>|null вложенный обьект ноды */
    public ?array $nested = null;

    /** @var bool|null Можно ли показывать поля для этого узла. */
    public ?bool $show_fields = null;
}
