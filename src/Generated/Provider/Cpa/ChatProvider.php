<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpa;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ChatByActionIdPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpa\Chat\ByActionIdResponse;

/**
 * Группа методов "chat" раздела Avito API "CPA Авито".
 */
class ChatProvider extends BaseAvitoProvider
{
    /**
     * Чат
     * 
     * Получение модели чата по идентификатору Максимальное количество запросов в минуту - 3.
     * 
     * OperationId: chatByActionId.
     * HTTP: GET /cpa/v1/chatByActionId/{actionId}.
     *
     * @param ChatByActionIdPrompt $prompt DTO запроса.
     *
     * @return ByActionIdResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byActionId(ChatByActionIdPrompt $prompt): ByActionIdResponse
    {
        /** @var ByActionIdResponse $response */
        $response = $this->request($prompt, ByActionIdResponse::class);

        return $response;
    }
}
