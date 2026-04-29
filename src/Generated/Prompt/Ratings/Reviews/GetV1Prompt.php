<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Ratings\Reviews;

use Andy87\ClientsAvito\Generated\Prompt\GetReviewsV1Prompt as BaseGetReviewsV1Prompt;

/**
 * Класс данных запроса Avito API [GET] /ratings/v1/reviews.
 * 
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/getReviewsV1
 * 
 * @property int $offset Смещение
 * @property int $limit Лимит количества отзывов
 */
class GetV1Prompt extends BaseGetReviewsV1Prompt
{
}
