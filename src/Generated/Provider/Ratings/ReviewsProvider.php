<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Ratings;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetReviewsV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Ratings\Reviews\GetV1Response;

/**
 * Группа методов "reviews" раздела Avito API "Рейтинги и отзывы".
 */
class ReviewsProvider extends BaseAvitoProvider
{
    /**
     * Получение списка активных отзывов на пользователя с пагинацией
     * 
     * OperationId: getReviewsV1.
     * HTTP: GET /ratings/v1/reviews.
     *
     * @param GetReviewsV1Prompt $prompt DTO запроса.
     *
     * @return GetV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV1(GetReviewsV1Prompt $prompt): GetV1Response
    {
        /** @var GetV1Response $response */
        $response = $this->request($prompt, GetV1Response::class);

        return $response;
    }
}
