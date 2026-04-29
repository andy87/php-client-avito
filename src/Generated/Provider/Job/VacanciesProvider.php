<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\VacanciesGetByIdsPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Vacancies\GetByIdsResponse;

/**
 * Группа методов "vacancies" раздела Avito API "Авито.Работа".
 */
class VacanciesProvider extends BaseAvitoProvider
{
    /**
     * Просмотр данных вакансий
     * 
     * По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.
     * Для просмотра данных необходимо быть владельцем вакансии.
     * 
     * OperationId: vacanciesGetByIds.
     * HTTP: POST /job/v2/vacancies/batch.
     *
     * @param VacanciesGetByIdsPrompt $prompt DTO запроса.
     *
     * @return GetByIdsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIds(VacanciesGetByIdsPrompt $prompt): GetByIdsResponse
    {
        /** @var GetByIdsResponse $response */
        $response = $this->request($prompt, GetByIdsResponse::class);

        return $response;
    }
}
