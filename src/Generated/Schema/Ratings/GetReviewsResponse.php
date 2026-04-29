<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Ratings;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/GetReviewsResponse.
 */
class GetReviewsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reviews' => 'reviews', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'reviews'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['reviews' => [\Andy87\ClientsAvito\Generated\Schema\Ratings\Review::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Ratings\Review> Список отзывов */
    public array $reviews;

    /** @var int Количество всех отзывов */
    public int $total;
}
