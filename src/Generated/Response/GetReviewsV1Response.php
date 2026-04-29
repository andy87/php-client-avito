<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /ratings/v1/reviews.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getReviewsV1
 */
class GetReviewsV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['reviews' => 'reviews', 'total' => 'total'];

    protected const REQUIRED_FIELDS = ['total', 'reviews'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['reviews' => [\Andy87\ClientsAvito\Generated\Schema\Ratings\Review::class]];

    protected const MODEL = \Andy87\ClientsAvito\Generated\Schema\Ratings\GetReviewsResponse::class;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Ratings\Review> Список отзывов */
    public array $reviews;

    /** @var int Количество всех отзывов */
    public int $total;
}
