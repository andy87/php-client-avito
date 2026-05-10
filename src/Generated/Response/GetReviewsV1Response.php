<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

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

    protected const CASTS = ['reviews' => [\and_y87\php_client_avito\Generated\Schema\Ratings\Review::class]];

    protected const MODEL = \and_y87\php_client_avito\Generated\Schema\Ratings\GetReviewsResponse::class;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Ratings\Review> Список отзывов */
    public array $reviews;

    /** @var int Количество всех отзывов */
    public int $total;
}
