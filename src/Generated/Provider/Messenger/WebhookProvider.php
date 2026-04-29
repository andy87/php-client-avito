<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\PostWebhookUnsubscribePrompt;
use Andy87\ClientsAvito\Generated\Prompt\PostWebhookV3Prompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Webhook\PostUnsubscribeResponse;
use Andy87\ClientsAvito\Generated\Response\Messenger\Webhook\PostV3Response;

/**
 * Группа методов "webhook" раздела Avito API "Мессенджер".
 */
class WebhookProvider extends BaseAvitoProvider
{
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
     * @return PostUnsubscribeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postUnsubscribe(PostWebhookUnsubscribePrompt $prompt): PostUnsubscribeResponse
    {
        /** @var PostUnsubscribeResponse $response */
        $response = $this->request($prompt, PostUnsubscribeResponse::class);

        return $response;
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
     * @return PostV3Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function postV3(PostWebhookV3Prompt $prompt): PostV3Response
    {
        /** @var PostV3Response $response */
        $response = $this->request($prompt, PostV3Response::class);

        return $response;
    }
}
