<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Ratings\Reviews;

use and_y87\php_client_avito\Generated\Response\GetReviewsV1Response as BaseGetReviewsV1Response;

/**
 * Ответ Avito API [GET] /ratings/v1/reviews.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getReviewsV1
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Ratings\Review> $reviews Список отзывов
 * @property int $total Количество всех отзывов
 */
class GetV1Response extends BaseGetReviewsV1Response
{
}
