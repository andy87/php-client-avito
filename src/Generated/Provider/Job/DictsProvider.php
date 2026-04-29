<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetDictsPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Dicts\GetResponse;

/**
 * Группа методов "dicts" раздела Avito API "Авито.Работа".
 */
class DictsProvider extends BaseAvitoProvider
{
    /**
     * Получение списка доступных словарей
     * 
     * Возвращает все доступные словари (Заменяет существующие списки)
     * 
     * OperationId: getDicts.
     * HTTP: GET /job/v2/vacancy/dict.
     *
     * @param GetDictsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetDictsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
