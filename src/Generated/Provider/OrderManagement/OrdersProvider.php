<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\OrderManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetOrdersPrompt;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Orders\GetResponse;

/**
 * Группа методов "orders" раздела Avito API "Управление заказами".
 */
class OrdersProvider extends BaseAvitoProvider
{
    /**
     * Получение информации о заказах
     * 
     * Получение информации о заказах по статусу.
     * Максимальное количество запросов в минуту - 500.
     * 
     * OperationId: getOrders.
     * HTTP: GET /order-management/1/orders.
     *
     * @param GetOrdersPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetOrdersPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
