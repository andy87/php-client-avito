<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Cpa;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetCallByIdV2Prompt;
use php_client_avito\Generated\Prompt\GetCallPrompt;
use php_client_avito\Generated\Response\Cpa\Call\GetByIdV2Response;
use php_client_avito\Generated\Response\Cpa\Call\GetResponse;

/**
 * Группа методов "call" раздела Avito API "CPA Авито".
 */
class CallProvider extends BaseAvitoProvider
{
    /**
     * Запись звонка (deprecated)
     *
     * __DEPRECATED__
     * __Используйте endpoint [get_record_by_call_id](https://developers.avito.ru/api-catalog/calltracking/documentation#operation/get_record_by_call_id)__
     * Получение записи звонка по идентификатору
     *
     * OperationId: getCall.
     * HTTP: GET /cpa/v1/call/{call_id}.
     *
     * @param GetCallPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetCallPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }

    /**
     * Звонок
     *
     * Получение модели звонка по идентификатору
     *
     * OperationId: getCallByIdV2.
     * HTTP: POST /cpa/v2/callById.
     *
     * @param GetCallByIdV2Prompt $prompt DTO запроса.
     *
     * @return GetByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIdV2(GetCallByIdV2Prompt $prompt): GetByIdV2Response
    {
        /** @var GetByIdV2Response $response */
        $response = $this->request($prompt, GetByIdV2Response::class);

        return $response;
    }
}
