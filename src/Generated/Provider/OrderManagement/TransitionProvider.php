<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\OrderManagement;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\ApplyTransitionPrompt;
use and_y87\php_client_avito\Generated\Response\OrderManagement\Transition\ApplyResponse;

/**
 * Группа методов "transition" раздела Avito API "Управление заказами".
 */
class TransitionProvider extends BaseAvitoProvider
{
    /**
     * Изменение статуса заказа
     *
     * Данный метод применяется для изменения статуса заказа, в частности для подтверждения или отмены заказа.
     * Максимальное количество запросов в минуту - 100.
     *
     * OperationId: applyTransition.
     * HTTP: POST /order-management/1/order/applyTransition.
     *
     * @param ApplyTransitionPrompt $prompt DTO запроса.
     *
     * @return ApplyResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function apply(ApplyTransitionPrompt $prompt): ApplyResponse
    {
        /** @var ApplyResponse $response */
        $response = $this->request($prompt, ApplyResponse::class);

        return $response;
    }
}
