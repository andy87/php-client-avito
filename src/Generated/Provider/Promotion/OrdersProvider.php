<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Promotion;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\ListOrdersByUserV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Promotion\Orders\ListByUserV1Response;

/**
 * Группа методов "orders" раздела Avito API "Продвижение".
 */
class OrdersProvider extends BaseAvitoProvider
{
    /**
     * Список заявок
     * 
     * Получение списка заявок на подключение услуг.
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: list_orders_by_user_v1.
     * HTTP: POST /promotion/v1/items/services/orders/get.
     *
     * @param ListOrdersByUserV1Prompt $prompt DTO запроса.
     *
     * @return ListByUserV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function listByUserV1(ListOrdersByUserV1Prompt $prompt): ListByUserV1Response
    {
        /** @var ListByUserV1Response $response */
        $response = $this->request($prompt, ListByUserV1Response::class);

        return $response;
    }
}
