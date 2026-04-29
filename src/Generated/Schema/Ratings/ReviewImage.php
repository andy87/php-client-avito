<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/ReviewImage.
 */
class ReviewImage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['number' => 'number', 'sizes' => 'sizes'];

    protected const REQUIRED_FIELDS = ['number', 'sizes'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['sizes' => [\Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewImageSize::class]];

    /** @var int Порядковый номер изображения */
    public int $number;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Ratings\ReviewImageSize> Список размеров изображения */
    public array $sizes;
}
