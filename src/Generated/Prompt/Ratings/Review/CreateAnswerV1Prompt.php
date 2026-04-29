<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Ratings\Review;

use Andy87\ClientsAvito\Generated\Prompt\CreateReviewAnswerV1Prompt as BaseCreateReviewAnswerV1Prompt;

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
