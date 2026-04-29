<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetCallByIdPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetCallsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetRecordByCallIdPrompt;
use Andy87\ClientsAvito\Generated\Response\GetCallByIdResponse;
use Andy87\ClientsAvito\Generated\Response\GetCallsResponse;
use Andy87\ClientsAvito\Generated\Response\GetRecordByCallIdResponse;

/**
 * Provider раздела Avito API "CallTracking[КТ]".
 * @property-read Calltracking\CallProvider $call
 * @property-read Calltracking\CallsProvider $calls
 * @property-read Calltracking\RecordProvider $record
 *
 */
class CalltrackingProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'call' => Calltracking\CallProvider::class,
        'calls' => Calltracking\CallsProvider::class,
        'record' => Calltracking\RecordProvider::class,
    ];

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
     * @return GetCallByIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_call_by_id(GetCallByIdPrompt $prompt): GetCallByIdResponse
    {
        /** @var Calltracking\CallProvider $group */
        $group = $this->operationGroup('call');

        return $group->getById($prompt);
    }

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
     * @return GetCallsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_calls(GetCallsPrompt $prompt): GetCallsResponse
    {
        /** @var Calltracking\CallsProvider $group */
        $group = $this->operationGroup('calls');

        return $group->get($prompt);
    }

    /**
     * Получение аудиозаписи звонка по идентификатору
     * 
     * Возвращает запись звонка по его id (callId).
     * 
     * Мы гарантируем, что записи звонка доступны для получения в течение 3х месяцев после завершения звонка.
     * 
     * Записи звонка становятся доступны в данном API с некоторой задержкой после окончания звонка. Обычно эта задержка составляет до 30 минут.
     * 
     * OperationId: get_record_by_call_id.
     * HTTP: GET /calltracking/v1/getRecordByCallId/.
     *
     * @param GetRecordByCallIdPrompt $prompt DTO запроса.
     *
     * @return GetRecordByCallIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get_record_by_call_id(GetRecordByCallIdPrompt $prompt): GetRecordByCallIdResponse
    {
        /** @var Calltracking\RecordProvider $group */
        $group = $this->operationGroup('record');

        return $group->getByCallId($prompt);
    }
}
