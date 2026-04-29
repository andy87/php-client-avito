<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Ratings;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetRatingsInfoV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Ratings\Ratings\GetInfoV1Response;

/**
 * Группа методов "ratings" раздела Avito API "Рейтинги и отзывы".
 */
class RatingsProvider extends BaseAvitoProvider
{
    /**
     * Получение информации о рейтинге пользователя
     * 
     * OperationId: getRatingsInfoV1.
     * HTTP: GET /ratings/v1/info.
     *
     * @param GetRatingsInfoV1Prompt $prompt DTO запроса.
     *
     * @return GetInfoV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getInfoV1(GetRatingsInfoV1Prompt $prompt): GetInfoV1Response
    {
        /** @var GetInfoV1Response $response */
        $response = $this->request($prompt, GetInfoV1Response::class);

        return $response;
    }
}
