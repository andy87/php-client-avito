<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Provider\Promotion;

use php_client_avito\BaseAvitoProvider;
use php_client_avito\Generated\Prompt\GetOrderStatusV1Prompt;
use php_client_avito\Generated\Response\Promotion\Order\GetStatusV1Response;

/**
 * Группа методов "order" раздела Avito API "Продвижение".
 */
class OrderProvider extends BaseAvitoProvider
{
    /**
     * Статус заявки
     *
     * Получение статуса заявки на подключение услуг продвижения
     *
     * **Rate limit:** 100 RPM
     *
     * OperationId: get_order_status_v1.
     * HTTP: POST /promotion/v1/items/services/orders/status.
     *
     * @param GetOrderStatusV1Prompt $prompt DTO запроса.
     *
     * @return GetStatusV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getStatusV1(GetOrderStatusV1Prompt $prompt): GetStatusV1Response
    {
        /** @var GetStatusV1Response $response */
        $response = $this->request($prompt, GetStatusV1Response::class);

        return $response;
    }
}
