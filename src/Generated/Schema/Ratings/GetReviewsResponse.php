<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Ratings;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito ratings/GetReviewsResponse.
 */
class GetReviewsResponse extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reviews' => 'reviews', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'reviews'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['reviews' => [\and_y87\php_client_avito\Generated\Schema\Ratings\Review::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Ratings\Review> Список отзывов */
    public array $reviews;

    /** @var int Количество всех отзывов */
    public int $total;
}
