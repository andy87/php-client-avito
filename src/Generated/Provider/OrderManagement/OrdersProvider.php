<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\OrderManagement;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\GetOrdersPrompt;
use and_y87\php_client_avito\Generated\Response\OrderManagement\Orders\GetResponse;

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
