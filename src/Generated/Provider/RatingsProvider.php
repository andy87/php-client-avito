<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateReviewAnswerV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetRatingsInfoV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetReviewsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\RemoveReviewAnswerV1Prompt;
use Andy87\ClientsAvito\Generated\Response\CreateReviewAnswerV1Response;
use Andy87\ClientsAvito\Generated\Response\GetRatingsInfoV1Response;
use Andy87\ClientsAvito\Generated\Response\GetReviewsV1Response;
use Andy87\ClientsAvito\Generated\Response\RemoveReviewAnswerV1Response;

/**
 * Provider раздела Avito API "Рейтинги и отзывы".
 * @property-read Ratings\RatingsProvider $ratings
 * @property-read Ratings\ReviewProvider $review
 * @property-read Ratings\ReviewsProvider $reviews
 *
 */
class RatingsProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'ratings' => Ratings\RatingsProvider::class,
        'review' => Ratings\ReviewProvider::class,
        'reviews' => Ratings\ReviewsProvider::class,
    ];

    /**
     * Отправка ответа на отзыв
     * 
     * OperationId: createReviewAnswerV1.
     * HTTP: POST /ratings/v1/answers.
     *
     * @param CreateReviewAnswerV1Prompt $prompt DTO запроса.
     *
     * @return CreateReviewAnswerV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createReviewAnswerV1(CreateReviewAnswerV1Prompt $prompt): CreateReviewAnswerV1Response
    {
        /** @var Ratings\ReviewProvider $group */
        $group = $this->operationGroup('review');

        return $group->createAnswerV1($prompt);
    }

    /**
     * Получение информации о рейтинге пользователя
     * 
     * OperationId: getRatingsInfoV1.
     * HTTP: GET /ratings/v1/info.
     *
     * @param GetRatingsInfoV1Prompt $prompt DTO запроса.
     *
     * @return GetRatingsInfoV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getRatingsInfoV1(GetRatingsInfoV1Prompt $prompt): GetRatingsInfoV1Response
    {
        /** @var Ratings\RatingsProvider $group */
        $group = $this->operationGroup('ratings');

        return $group->getInfoV1($prompt);
    }

    /**
     * Получение списка активных отзывов на пользователя с пагинацией
     * 
     * OperationId: getReviewsV1.
     * HTTP: GET /ratings/v1/reviews.
     *
     * @param GetReviewsV1Prompt $prompt DTO запроса.
     *
     * @return GetReviewsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getReviewsV1(GetReviewsV1Prompt $prompt): GetReviewsV1Response
    {
        /** @var Ratings\ReviewsProvider $group */
        $group = $this->operationGroup('reviews');

        return $group->getV1($prompt);
    }

    /**
     * Запрос на удаление ответа на отзыв
     * 
     * OperationId: removeReviewAnswerV1.
     * HTTP: DELETE /ratings/v1/answers/{answer_id}.
     *
     * @param RemoveReviewAnswerV1Prompt $prompt DTO запроса.
     *
     * @return RemoveReviewAnswerV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function removeReviewAnswerV1(RemoveReviewAnswerV1Prompt $prompt): RemoveReviewAnswerV1Response
    {
        /** @var Ratings\ReviewProvider $group */
        $group = $this->operationGroup('review');

        return $group->removeAnswerV1($prompt);
    }
}
