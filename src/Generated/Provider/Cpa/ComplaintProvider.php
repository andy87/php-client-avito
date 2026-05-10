<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Cpa;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\CreateComplaintByActionIdPrompt;
use php_client_avito\Generated\Response\Cpa\Complaint\CreateByActionIdResponse;

/**
 * Группа методов "complaint" раздела Avito API "CPA Авито".
 */
class ComplaintProvider extends BaseAvitoProvider
{
    /**
     * Создание жалобы для звонков/чатов
     *
     * Создание жалобы на целевое действие по actionId. Максимальное количество запросов в минуту - 3.
     *
     * OperationId: createComplaintByActionId.
     * HTTP: POST /cpa/v1/createComplaintByActionId.
     *
     * @param CreateComplaintByActionIdPrompt $prompt DTO запроса.
     *
     * @return CreateByActionIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createByActionId(CreateComplaintByActionIdPrompt $prompt): CreateByActionIdResponse
    {
        /** @var CreateByActionIdResponse $response */
        $response = $this->request($prompt, CreateByActionIdResponse::class);

        return $response;
    }
}
