<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Messenger;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetSubscriptionsPrompt;
use Andy87\ClientsAvito\Generated\Response\Messenger\Subscriptions\GetResponse;

/**
 * Группа методов "subscriptions" раздела Avito API "Мессенджер".
 */
class SubscriptionsProvider extends BaseAvitoProvider
{
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
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetSubscriptionsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
