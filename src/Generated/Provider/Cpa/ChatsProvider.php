<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpa;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimeCpaCpaV2ChatsByTimePrompt;
use Andy87\ClientsAvito\Generated\Prompt\ChatsByTimePrompt;
use Andy87\ClientsAvito\Generated\Response\Cpa\Chats\ByTimeCpaCpaV2ChatsByTimeResponse;
use Andy87\ClientsAvito\Generated\Response\Cpa\Chats\ByTimeResponse;

/**
 * Группа методов "chats" раздела Avito API "CPA Авито".
 */
class ChatsProvider extends BaseAvitoProvider
{
    /**
     * Чаты по времени (deprecated)
     * 
     * Получение списка чатов по времени создания (deprecated). Максимальное количество запросов в минуту - 60.
     * 
     * OperationId: chatsByTime.
     * HTTP: POST /cpa/v1/chatsByTime.
     *
     * @param ChatsByTimePrompt $prompt DTO запроса.
     *
     * @return ByTimeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byTime(ChatsByTimePrompt $prompt): ByTimeResponse
    {
        /** @var ByTimeResponse $response */
        $response = $this->request($prompt, ByTimeResponse::class);

        return $response;
    }

    /**
     * Чаты по времени
     * 
     * Получение списка чатов по времени создания. Максимальное количество запросов в минуту - 40.
     * 
     * OperationId: chatsByTime.
     * HTTP: POST /cpa/v2/chatsByTime.
     *
     * @param ChatsByTimeCpaCpaV2ChatsByTimePrompt $prompt DTO запроса.
     *
     * @return ByTimeCpaCpaV2ChatsByTimeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function byTimeCpaCpaV2ChatsByTime(ChatsByTimeCpaCpaV2ChatsByTimePrompt $prompt): ByTimeCpaCpaV2ChatsByTimeResponse
    {
        /** @var ByTimeCpaCpaV2ChatsByTimeResponse $response */
        $response = $this->request($prompt, ByTimeCpaCpaV2ChatsByTimeResponse::class);

        return $response;
    }
}
