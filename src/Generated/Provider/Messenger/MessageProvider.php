<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\DeleteMessagePrompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Message\DeleteResponse;

/**
 * Группа методов "message" раздела Avito API "Мессенджер".
 */
class MessageProvider extends BaseAvitoProvider
{
    /**
     * Удаление сообщения
     * 
     * Сообщение не пропадает из истории, а меняет свой тип на deleted.
     * Удалять сообщения можно не позднее часа с момента их отправки.
     * 
     * OperationId: deleteMessage.
     * HTTP: POST /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/{message_id}.
     *
     * @param DeleteMessagePrompt $prompt DTO запроса.
     *
     * @return DeleteResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function delete(DeleteMessagePrompt $prompt): DeleteResponse
    {
        /** @var DeleteResponse $response */
        $response = $this->request($prompt, DeleteResponse::class);

        return $response;
    }
}
