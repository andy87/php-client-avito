<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Job;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ResumeGetContactsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\ResumeGetItemPrompt;
use Andy87\ClientsAvito\Generated\Response\Job\Resume\GetContactsResponse;
use Andy87\ClientsAvito\Generated\Response\Job\Resume\GetItemResponse;

/**
 * Группа методов "resume" раздела Avito API "Авито.Работа".
 */
class ResumeProvider extends BaseAvitoProvider
{
    /**
     * Доступ к контактным данным соискателя
     * 
     * Для получения контактов пользователя необходимо приобрести пакет просмотров в [личном кабинете](https://www.avito.ru/paid-services/contact-packages/cvs). Если резюме было получено из отклика, контакты предоставляются без списания из пакета просмотров.
     * 
     * OperationId: resumeGetContacts.
     * HTTP: GET /job/v1/resumes/{resume_id}/contacts/.
     *
     * @param ResumeGetContactsPrompt $prompt DTO запроса.
     *
     * @return GetContactsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getContacts(ResumeGetContactsPrompt $prompt): GetContactsResponse
    {
        /** @var GetContactsResponse $response */
        $response = $this->request($prompt, GetContactsResponse::class);

        return $response;
    }

    /**
     * Просмотр данных резюме
     * 
     * По умолчанию fields и params выводятся все. Если указана только часть полей - остальные поля будут отсутствовать в ответе.
     * 
     * OperationId: resumeGetItem.
     * HTTP: GET /job/v2/resumes/{resume_id}.
     *
     * @param ResumeGetItemPrompt $prompt DTO запроса.
     *
     * @return GetItemResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getItem(ResumeGetItemPrompt $prompt): GetItemResponse
    {
        /** @var GetItemResponse $response */
        $response = $this->request($prompt, GetItemResponse::class);

        return $response;
    }
}
