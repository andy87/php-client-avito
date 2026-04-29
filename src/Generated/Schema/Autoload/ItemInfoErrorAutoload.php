<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoload;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoload/ItemInfoErrorAutoload.
 */
class ItemInfoErrorAutoload extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['code' => 'code', 'description' => 'description', 'manual' => 'manual', 'title' => 'title'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['manual'];

    protected const CASTS = [];

    /** @var int|null Идентификатор события */
    public ?int $code = null;

    /** @var string|null Описание */
    public ?string $description = null;

    /** @var string|null Ссылка на документацию */
    public ?string $manual = null;

    /** @var string|null Заголовок */
    public ?string $title = null;
}
