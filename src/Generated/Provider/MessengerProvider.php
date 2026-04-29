<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ChatReadPrompt;
use Andy87\ClientsAvito\Generated\Prompt\DeleteMessagePrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetChatByIdV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetChatsV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetMessagesV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetSubscriptionsPrompt;
use Andy87\ClientsAvito\Generated\Prompt\GetVoiceFilesPrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostBlacklistV2Prompt;
use Andy87\ClientsAvito\Generated\Prompt\PostSendImageMessagePrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostSendMessagePrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostWebhookUnsubscribePrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostWebhookV3Prompt;
use Andy87\ClientsAvito\Generated\Prompt\UploadImagesPrompt;
use Andy87\ClientsAvito\Generated\Response\ChatReadResponse;
use Andy87\ClientsAvito\Generated\Response\DeleteMessageResponse;
use Andy87\ClientsAvito\Generated\Response\GetChatByIdV2Response;
use Andy87\ClientsAvito\Generated\Response\GetChatsV2Response;
use Andy87\ClientsAvito\Generated\Response\GetMessagesV3Response;
use Andy87\ClientsAvito\Generated\Response\GetSubscriptionsResponse;
use Andy87\ClientsAvito\Generated\Response\GetVoiceFilesResponse;
use Andy87\ClientsAvito\Generated\Response\PostBlacklistV2Response;
use Andy87\ClientsAvito\Generated\Response\PostSendImageMessageResponse;
use Andy87\ClientsAvito\Generated\Response\PostSendMessageResponse;
use Andy87\ClientsAvito\Generated\Response\PostWebhookUnsubscribeResponse;
use Andy87\ClientsAvito\Generated\Response\PostWebhookV3Response;
use Andy87\ClientsAvito\Generated\Response\UploadImagesResponse;

/**
 * Provider раздела Avito API "Мессенджер".
 * @property-read Messenger\BlacklistProvider $blacklist
 * @property-read Messenger\ChatProvider $chat
 * @property-read Messenger\ChatsProvider $chats
 * @property-read Messenger\ImagesProvider $images
 * @property-read Messenger\MessageProvider $message
 * @property-read Messenger\MessagesProvider $messages
 * @property-read Messenger\PostProvider $post
 * @property-read Messenger\SubscriptionsProvider $subscriptions
 * @property-read Messenger\VoiceProvider $voice
 * @property-read Messenger\WebhookProvider $webhook
 *
 */
class MessengerProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'blacklist' => Messenger\BlacklistProvider::class,
        'chat' => Messenger\ChatProvider::class,
        'chats' => Messenger\ChatsProvider::class,
        'images' => Messenger\ImagesProvider::class,
        'message' => Messenger\MessageProvider::class,
        'messages' => Messenger\MessagesProvider::class,
        'post' => Messenger\PostProvider::class,
        'subscriptions' => Messenger\SubscriptionsProvider::class,
        'voice' => Messenger\VoiceProvider::class,
        'webhook' => Messenger\WebhookProvider::class,
    ];

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
     * @return ChatReadResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function chatRead(ChatReadPrompt $prompt): ChatReadResponse
    {
        /** @var Messenger\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->read($prompt);
    }

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
     * @return DeleteMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function deleteMessage(DeleteMessagePrompt $prompt): DeleteMessageResponse
    {
        /** @var Messenger\MessageProvider $group */
        $group = $this->operationGroup('message');

        return $group->delete($prompt);
    }

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
     * @return GetChatByIdV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatByIdV2(GetChatByIdV2Prompt $prompt): GetChatByIdV2Response
    {
        /** @var Messenger\ChatProvider $group */
        $group = $this->operationGroup('chat');

        return $group->getByIdV2($prompt);
    }

    /**
     * Получение информации по чатам
     * 
     * Возвращает список чатов
     * 
     * OperationId: getChatsV2.
     * HTTP: GET /messenger/v2/accounts/{user_id}/chats.
     *
     * @param GetChatsV2Prompt $prompt DTO запроса.
     *
     * @return GetChatsV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getChatsV2(GetChatsV2Prompt $prompt): GetChatsV2Response
    {
        /** @var Messenger\ChatsProvider $group */
        $group = $this->operationGroup('chats');

        return $group->getV2($prompt);
    }

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
     * @return GetMessagesV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getMessagesV3(GetMessagesV3Prompt $prompt): GetMessagesV3Response
    {
        /** @var Messenger\MessagesProvider $group */
        $group = $this->operationGroup('messages');

        return $group->getV3($prompt);
    }

    /**
     * Получение подписок (webhooks)
     * 
     * Получение списка подписок
     * 
     * OperationId: getSubscriptions.
     * HTTP: POST /messenger/v1/subscriptions.
     *
     * @param GetSubscriptionsPrompt $prompt DTO запроса.
     *
     * @return GetSubscriptionsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSubscriptions(GetSubscriptionsPrompt $prompt): GetSubscriptionsResponse
    {
        /** @var Messenger\SubscriptionsProvider $group */
        $group = $this->operationGroup('subscriptions');

        return $group->get($prompt);
    }

    /**
     * Получение голосовых сообщений
     * 
     * Метод используется для получения ссылки на файл с голосовым сообщением по идентификатору voice_id, получаемому из тела сообщения с типом voice.
     * 
     * Особенности работы с голосовыми сообщениями:
     * - Голосовые сообщения Авито используют кодек **[opus](https://ru.wikipedia.org/wiki/Opus_(%D0%BA%D0%BE%D0%B4%D0%B5%D0%BA))** внутри **.mp4** контейнера; 
     * - Ссылка на голосовое сообщение доступна в течение **одного часа** с момента запроса. Попытка получить файл по ссылке спустя это время приведёт к ошибке. Для восстановления доступа необходимо получить новую ссылку на файл;
     * - Как и с обычными сообщениями, получение ссылки на файл доступно только для пользователей, находящихся в беседе, где голосовое сообщение было отправлено;
     * 
     * OperationId: getVoiceFiles.
     * HTTP: GET /messenger/v1/accounts/{user_id}/getVoiceFiles.
     *
     * @param GetVoiceFilesPrompt $prompt DTO запроса.
     *
     * @return GetVoiceFilesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getVoiceFiles(GetVoiceFilesPrompt $prompt): GetVoiceFilesResponse
    {
        /** @var Messenger\VoiceProvider $group */
        $group = $this->operationGroup('voice');

        return $group->getFiles($prompt);
    }

    /**
     * Добавление пользователя в blacklist
     * 
     * OperationId: postBlacklistV2.
     * HTTP: POST /messenger/v2/accounts/{user_id}/blacklist.
     *
     * @param PostBlacklistV2Prompt $prompt DTO запроса.
     *
     * @return PostBlacklistV2Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postBlacklistV2(PostBlacklistV2Prompt $prompt): PostBlacklistV2Response
    {
        /** @var Messenger\BlacklistProvider $group */
        $group = $this->operationGroup('blacklist');

        return $group->postV2($prompt);
    }

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
     * @return PostSendImageMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postSendImageMessage(PostSendImageMessagePrompt $prompt): PostSendImageMessageResponse
    {
        /** @var Messenger\PostProvider $group */
        $group = $this->operationGroup('post');

        return $group->sendImageMessage($prompt);
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
     * @return PostSendMessageResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postSendMessage(PostSendMessagePrompt $prompt): PostSendMessageResponse
    {
        /** @var Messenger\PostProvider $group */
        $group = $this->operationGroup('post');

        return $group->sendMessage($prompt);
    }

    /**
     * Отключение уведомлений (webhooks)
     * 
     * Отключение уведомлений
     * 
     * OperationId: postWebhookUnsubscribe.
     * HTTP: POST /messenger/v1/webhook/unsubscribe.
     *
     * @param PostWebhookUnsubscribePrompt $prompt DTO запроса.
     *
     * @return PostWebhookUnsubscribeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postWebhookUnsubscribe(PostWebhookUnsubscribePrompt $prompt): PostWebhookUnsubscribeResponse
    {
        /** @var Messenger\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->postUnsubscribe($prompt);
    }

    /**
     * Включение уведомлений V3 (webhooks)
     * 
     * Включение webhook-уведомлений. 
     * 
     * Схему JSON приходящего в webhook сообщения можно увидеть в примерах ответов.
     * 
     * После регистрации url'а для получения веб-хуков, убедитесь, что он доступен, работает и возвращает статус 200 ОК соблюдая timeout 2s,
     * например, выполнив запрос:
     * 
     * curl --connect-timeout 2 <url-вашего-вебхука> -i -d '{}'
     * 
     * OperationId: postWebhookV3.
     * HTTP: POST /messenger/v3/webhook.
     *
     * @param PostWebhookV3Prompt $prompt DTO запроса.
     *
     * @return PostWebhookV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postWebhookV3(PostWebhookV3Prompt $prompt): PostWebhookV3Response
    {
        /** @var Messenger\WebhookProvider $group */
        $group = $this->operationGroup('webhook');

        return $group->postV3($prompt);
    }

    /**
     * Загрузка изображений
     * 
     * Метод используется для загрузки изображений в формате JPEG, HEIC, GIF, BMP или PNG.
     * 
     * Особенности работы с загрузкой изображений:
     * - Метод поддерживает только одиночные изображения; для загрузки нескольких картинок необходимо сделать несколько запросов;
     * - Максимальный размер файла — 24 МБ;
     * - Максимальное разрешение — 75 мегапиксилей;
     * 
     * OperationId: uploadImages.
     * HTTP: POST /messenger/v1/accounts/{user_id}/uploadImages.
     *
     * @param UploadImagesPrompt $prompt DTO запроса.
     *
     * @return UploadImagesResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function uploadImages(UploadImagesPrompt $prompt): UploadImagesResponse
    {
        /** @var Messenger\ImagesProvider $group */
        $group = $this->operationGroup('images');

        return $group->upload($prompt);
    }
}
