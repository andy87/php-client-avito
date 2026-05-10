<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Ratings;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\CreateReviewAnswerV1Prompt;
use php_client_avito\Generated\Prompt\RemoveReviewAnswerV1Prompt;
use php_client_avito\Generated\Response\Ratings\Review\CreateAnswerV1Response;
use php_client_avito\Generated\Response\Ratings\Review\RemoveAnswerV1Response;

/**
 * Группа методов "review" раздела Avito API "Рейтинги и отзывы".
 */
class ReviewProvider extends BaseAvitoProvider
{
    /**
     * Отправка ответа на отзыв
     *
     * OperationId: createReviewAnswerV1.
     * HTTP: POST /ratings/v1/answers.
     *
     * @param CreateReviewAnswerV1Prompt $prompt DTO запроса.
     *
     * @return CreateAnswerV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createAnswerV1(CreateReviewAnswerV1Prompt $prompt): CreateAnswerV1Response
    {
        /** @var CreateAnswerV1Response $response */
        $response = $this->request($prompt, CreateAnswerV1Response::class);

        return $response;
    }

    /**
     * Запрос на удаление ответа на отзыв
     *
     * OperationId: removeReviewAnswerV1.
     * HTTP: DELETE /ratings/v1/answers/{answer_id}.
     *
     * @param RemoveReviewAnswerV1Prompt $prompt DTO запроса.
     *
     * @return RemoveAnswerV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function removeAnswerV1(RemoveReviewAnswerV1Prompt $prompt): RemoveAnswerV1Response
    {
        /** @var RemoveAnswerV1Response $response */
        $response = $this->request($prompt, RemoveAnswerV1Response::class);

        return $response;
    }
}
