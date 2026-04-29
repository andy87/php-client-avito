<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpa;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostCreateComplaintPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpa\Post\CreateComplaintResponse;

/**
 * Группа методов "post" раздела Avito API "CPA Авито".
 */
class PostProvider extends BaseAvitoProvider
{
    /**
     * Создание жалобы для звонков
     * 
     * Создание жалобы на звонок по идентификатору. Максимальное количество запросов в минуту - 1.
     * 
     * OperationId: postCreateComplaint.
     * HTTP: POST /cpa/v1/createComplaint.
     *
     * @param PostCreateComplaintPrompt $prompt DTO запроса.
     *
     * @return CreateComplaintResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createComplaint(PostCreateComplaintPrompt $prompt): CreateComplaintResponse
    {
        /** @var CreateComplaintResponse $response */
        $response = $this->request($prompt, CreateComplaintResponse::class);

        return $response;
    }
}
