<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Cpa;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\ChatsByTimeCpaCpaV2ChatsByTimePrompt;
use and_y87\php_client_avito\Generated\Prompt\ChatsByTimePrompt;
use and_y87\php_client_avito\Generated\Response\Cpa\Chats\ByTimeCpaCpaV2ChatsByTimeResponse;
use and_y87\php_client_avito\Generated\Response\Cpa\Chats\ByTimeResponse;

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
