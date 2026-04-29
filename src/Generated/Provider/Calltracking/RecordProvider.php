<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Calltracking;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetRecordByCallIdPrompt;
use Andy87\ClientsAvito\Generated\Response\Calltracking\Record\GetByCallIdResponse;

/**
 * Группа методов "record" раздела Avito API "CallTracking[КТ]".
 */
class RecordProvider extends BaseAvitoProvider
{
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
     * @return GetByCallIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByCallId(GetRecordByCallIdPrompt $prompt): GetByCallIdResponse
    {
        /** @var GetByCallIdResponse $response */
        $response = $this->request($prompt, GetByCallIdResponse::class);

        return $response;
    }
}
