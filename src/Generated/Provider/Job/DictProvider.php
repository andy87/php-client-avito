<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetDictByIDPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Dict\GetByIDResponse;

/**
 * Группа методов "dict" раздела Avito API "Авито.Работа".
 */
class DictProvider extends BaseAvitoProvider
{
    /**
     * Получение доступных значений списка по ID словаря
     * 
     * Возвращает доступные значения по имени справочника. Значения с признаком deprecated не могут использоваться при создании и обновлении вакансий.
     * 
     * OperationId: getDictByID.
     * HTTP: GET /job/v2/vacancy/dict/{dictionary_id}.
     *
     * @param GetDictByIDPrompt $prompt DTO запроса.
     *
     * @return GetByIDResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByID(GetDictByIDPrompt $prompt): GetByIDResponse
    {
        /** @var GetByIDResponse $response */
        $response = $this->request($prompt, GetByIDResponse::class);

        return $response;
    }
}
