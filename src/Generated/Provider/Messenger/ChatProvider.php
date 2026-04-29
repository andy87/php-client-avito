<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ChatReadPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetChatByIdV2Prompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Chat\GetByIdV2Response;
use Andy87\ClientsAvito\Generated\Response\Messenger\Chat\ReadResponse;

/**
 * Группа методов "chat" раздела Avito API "Мессенджер".
 */
class ChatProvider extends BaseAvitoProvider
{
    /**
     * Получение информации по чату
     * 
     * Возвращает данные чата и последнее сообщение в нем
     * 
     * OperationId: getChatByIdV2.
     * HTTP: GET /messenger/v2/accounts/{user_id}/chats/{chat_id}.
     *
     * @param GetChatByIdV2Prompt $prompt DTO запроса.
     *
     * @return GetByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getByIdV2(GetChatByIdV2Prompt $prompt): GetByIdV2Response
    {
        /** @var GetByIdV2Response $response */
        $response = $this->request($prompt, GetByIdV2Response::class);

        return $response;
    }

    /**
     * Прочитать чат
     * 
     * После успешного получения списка сообщений необходимо вызвать этот метод для того, чтобы чат стал прочитанным.
     * 
     * OperationId: chatRead.
     * HTTP: POST /messenger/v1/accounts/{user_id}/chats/{chat_id}/read.
     *
     * @param ChatReadPrompt $prompt DTO запроса.
     *
     * @return ReadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function read(ChatReadPrompt $prompt): ReadResponse
    {
        /** @var ReadResponse $response */
        $response = $this->request($prompt, ReadResponse::class);

        return $response;
    }
}
