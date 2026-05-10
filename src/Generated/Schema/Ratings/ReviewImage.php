<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewImage.
 */
class ReviewImage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['number' => 'number', 'sizes' => 'sizes'];

    protected const REQUIRED_FIELDS = ['number', 'sizes'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['sizes' => [\and_y87\php_client_avito\Generated\Schema\Ratings\ReviewImageSize::class]];

    /** @var int Порядковый номер изображения */
    public int $number;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Ratings\ReviewImageSize> Список размеров изображения */
    public array $sizes;
}
