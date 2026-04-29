<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetMessagesV3Prompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Messages\GetV3Response;

/**
 * Группа методов "messages" раздела Avito API "Мессенджер".
 */
class MessagesProvider extends BaseAvitoProvider
{
    /**
     * Получение списка сообщений V3
     * 
     * Получение списка сообщений.  **Не помечает чат прочитанным.**
     * После успешного получения списка сообщений необходимо вызвать [метод](https://api.avito.ru/docs/api.html#operation/chatRead), который сделает сообщения прочитанными.
     * Для получения новых сообщений в реальном времени используйте [webhooks](https://api.avito.ru/docs/api.html#operation/postWebhookV3)
     * 
     * OperationId: getMessagesV3.
     * HTTP: GET /messenger/v3/accounts/{user_id}/chats/{chat_id}/messages/.
     *
     * @param GetMessagesV3Prompt $prompt DTO запроса.
     *
     * @return GetV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getV3(GetMessagesV3Prompt $prompt): GetV3Response
    {
        /** @var GetV3Response $response */
        $response = $this->request($prompt, GetV3Response::class);

        return $response;
    }
}
