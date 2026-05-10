<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Calltracking;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\GetCallByIdPrompt;
use and_y87\php_client_avito\Generated\Response\Calltracking\Call\GetByIdResponse;

/**
 * Группа методов "call" раздела Avito API "CallTracking[КТ]".
 */
class CallProvider extends BaseAvitoProvider
{
    /**
     * Звонок по идентификатору
     *
     * Возвращает информацию о звонке по его id(callId)
     *
     * OperationId: get_call_by_id.
     * HTTP: POST /calltracking/v1/getCallById/.
     *
     * @param GetCallByIdPrompt $prompt DTO запроса.
     *
     * @return GetByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getById(GetCallByIdPrompt $prompt): GetByIdResponse
    {
        /** @var GetByIdResponse $response */
        $response = $this->request($prompt, GetByIdResponse::class);

        return $response;
    }
}
