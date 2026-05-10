<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
