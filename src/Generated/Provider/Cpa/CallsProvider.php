<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpa;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetCallsByTimeV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Cpa\Calls\GetByTimeV2Response;

/**
 * Группа методов "calls" раздела Avito API "CPA Авито".
 */
class CallsProvider extends BaseAvitoProvider
{
    /**
     * Звонки по времени
     * 
     * Получение списка звонков по времени создания. Максимальное количество запросов в минуту - 1.
     * 
     * OperationId: getCallsByTimeV2.
     * HTTP: POST /cpa/v2/callsByTime.
     *
     * @param GetCallsByTimeV2Prompt $prompt DTO запроса.
     *
     * @return GetByTimeV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByTimeV2(GetCallsByTimeV2Prompt $prompt): GetByTimeV2Response
    {
        /** @var GetByTimeV2Response $response */
        $response = $this->request($prompt, GetByTimeV2Response::class);

        return $response;
    }
}
