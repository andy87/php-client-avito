<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Autoteka;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ScoringByVehicleIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ScoringGetByIdPrompt;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Scoring\ByVehicleIdResponse;
use Andy87\ClientsAvito\Generated\Response\Autoteka\Scoring\GetByIdResponse;

/**
 * Группа методов "scoring" раздела Avito API "Автотека".
 */
class ScoringProvider extends BaseAvitoProvider
{
    /**
     * Скоринг рисков по идентификатору авто (vin/frame)
     * 
     * Метод для запроса скоринга рисков по идентификатору авто (vin/frame). Возвращает идентификатор, по которому скоринг можно получить в [методе для получения скоринга рисков по его идентификатору](#operation/scoringGetById). При запросе происходит списание доступных проверок.
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: scoringByVehicleId.
     * HTTP: POST /autoteka/v1/scoring/by-vehicle-id.
     *
     * @param ScoringByVehicleIdPrompt $prompt DTO запроса.
     *
     * @return ByVehicleIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byVehicleId(ScoringByVehicleIdPrompt $prompt): ByVehicleIdResponse
    {
        /** @var ByVehicleIdResponse $response */
        $response = $this->request($prompt, ByVehicleIdResponse::class);

        return $response;
    }

    /**
     * Получение скоринга рисков по его ID
     * 
     * Получение скоринга рисков по его идентификатору, полученному из [запроса на создание скоринга](#operation/scoringByVehicleId).
     * 
     * Чтобы подключить эту возможность, обратитесь к менеджеру Автотеки. Обратите внимание, что для её подключения надо завести отдельную учётную запись Автотеки.
     * 
     * OperationId: scoringGetById.
     * HTTP: GET /autoteka/v1/scoring/{scoring_id}.
     *
     * @param ScoringGetByIdPrompt $prompt DTO запроса.
     *
     * @return GetByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getById(ScoringGetByIdPrompt $prompt): GetByIdResponse
    {
        /** @var GetByIdResponse $response */
        $response = $this->request($prompt, GetByIdResponse::class);

        return $response;
    }
}
