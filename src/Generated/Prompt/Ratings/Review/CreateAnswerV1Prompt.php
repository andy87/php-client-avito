<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Prompt\Ratings\Review;

use php_client_avito\Generated\Prompt\CreateReviewAnswerV1Prompt as BaseCreateReviewAnswerV1Prompt;

/**
 * Класс данных запроса Avito API [POST] /ratings/v1/answers.
 *
 * @documentation https://developers.avito.ru/api-catalog/ratings/documentation#operation/createReviewAnswerV1
 *
 * @property string $message Текст ответа на отзыв
 * @property int $reviewId ID отзыва
 */
class CreateAnswerV1Prompt extends BaseCreateReviewAnswerV1Prompt
{
}
