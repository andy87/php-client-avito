<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\Messenger;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\GetSubscriptionsPrompt;
use and_y87\php_client_avito\Generated\Response\Messenger\Subscriptions\GetResponse;

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
