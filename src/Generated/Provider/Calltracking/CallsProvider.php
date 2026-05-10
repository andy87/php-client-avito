<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Calltracking;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\GetCallsPrompt;
use and_y87\php_client_avito\Generated\Response\Calltracking\Calls\GetResponse;

/**
 * Группа методов "calls" раздела Avito API "CallTracking[КТ]".
 */
class CallsProvider extends BaseAvitoProvider
{
    /**
     * Звонки по времени
     *
     * Возвращает список звонков с фильтром по времени звонка
     *
     * OperationId: get_calls.
     * HTTP: POST /calltracking/v1/getCalls/.
     *
     * @param GetCallsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetCallsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
