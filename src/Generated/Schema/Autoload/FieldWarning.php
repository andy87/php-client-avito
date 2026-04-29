<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/FieldWarning.
 */
class FieldWarning extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['content' => 'content', 'title' => 'title'];

    protected const REQUIRED_FIELDS = ['title', 'content'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Содержание предупреждения */
    public string $content;

    /** @var string Заголовок предупреждения */
    public string $title;
}
