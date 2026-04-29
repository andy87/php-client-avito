<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/DiagnosticsEventPhoto.
 */
class DiagnosticsEventPhoto extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['name' => 'name', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['url', 'name'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Описание фотографии */
    public string $name;

    /** @var string Ссылка на фото */
    public string $url;
}
