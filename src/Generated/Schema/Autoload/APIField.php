<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/APIField.
 */
class APIField extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['children' => 'children', 'content' => 'content', 'descriptions' => 'descriptions', 'feed_format' => 'feed_format', 'label' => 'label', 'tag' => 'tag'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['children' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ChildAPIField::class], 'content' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldContent::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ChildAPIField>|null Schema field children */
    public ?array $children = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\APIFieldContent>|null Набор правил для заполнения тега. У одного тега может быть набор правил с разными условиями их применения. Одновременно они не применяются — все, кроме одного, должны быть исключены по правилам, описанным в атрибуте dependencies.

Иногда ни один из элементов не применяется. Так бывает, если текущее поле зависит от значения другого поля — пока не будет удовлетворено условие заполнения другого поля, текущее поле будет недоступно.

Если у поля нет аттрибута dependencies, поле считается доступным для заполнения.
 */
    public ?array $content = null;

    /** @var string|null Описание тега */
    public ?string $descriptions = null;

    /** @var array<int, string>|null Schema field feed_format */
    public ?array $feed_format = null;

    /** @var string|null Label (на русском) для указания в файле загрузки */
    public ?string $label = null;

    /** @var string|null Тег для указания в файле загрузки */
    public ?string $tag = null;
}
