<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CarImageAutoteka.
 */
class CarImageAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['originalUrl' => 'originalUrl', 'previewUrl' => 'previewUrl'];

    protected const REQUIRED_FIELDS = ['originalUrl', 'previewUrl'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Оригинальное фото загруженное на avito.ru */
    public string $originalUrl;

    /** @var string Изображение авто 640x480 */
    public string $previewUrl;
}
