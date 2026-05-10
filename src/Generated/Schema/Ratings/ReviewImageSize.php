<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewImageSize.
 */
class ReviewImageSize extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['size' => 'size', 'url' => 'url'];

    protected const REQUIRED_FIELDS = ['size', 'url'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Разрешение изображения в формате 100x100 */
    public string $size;

    /** @var string Ссылка на изображение */
    public string $url;
}
