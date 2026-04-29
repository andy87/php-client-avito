<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostSendImageMessagePrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostSendMessagePrompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Post\SendImageMessageResponse;
use Andy87\ClientsAvito\Generated\Response\Messenger\Post\SendMessageResponse;

/**
 * Группа методов "post" раздела Avito API "Мессенджер".
 */
class PostProvider extends BaseAvitoProvider
{
    /**
     * Отправка сообщения с изображением
     * 
     * Метод используется для отправки сообщения с изображением.
     * 
     * Для отправки сообщения с изображением необходимо передать в запросе id изображения, полученного после загрузки.
     * 
     * OperationId: postSendImageMessage.
     * HTTP: POST /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/image.
     *
     * @param PostSendImageMessagePrompt $prompt DTO запроса.
     *
     * @return SendImageMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function sendImageMessage(PostSendImageMessagePrompt $prompt): SendImageMessageResponse
    {
        /** @var SendImageMessageResponse $response */
        $response = $this->request($prompt, SendImageMessageResponse::class);

        return $response;
    }

    /**
     * Отправка сообщения
     * 
     * На данный момент можно отправить только текстовое сообщение
     * 
     * OperationId: postSendMessage.
     * HTTP: POST /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages.
     *
     * @param PostSendMessagePrompt $prompt DTO запроса.
     *
     * @return SendMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function sendMessage(PostSendMessagePrompt $prompt): SendMessageResponse
    {
        /** @var SendMessageResponse $response */
        $response = $this->request($prompt, SendMessageResponse::class);

        return $response;
    }
}
