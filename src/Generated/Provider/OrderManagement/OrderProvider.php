<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\OrderManagement;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\SetOrderTrackingNumberPrompt;
use and_y87\php_client_avito\Generated\Response\OrderManagement\Order\SetTrackingNumberResponse;

/**
 * Группа методов "order" раздела Avito API "Управление заказами".
 */
class OrderProvider extends BaseAvitoProvider
{
    /**
     * Передача трек-номера
     *
     * Метод для передачи трек-номера для доставки партнёрами продавца (DBS)
     * Максимальное количество запросов в минуту - 100.
     *
     * OperationId: setOrderTrackingNumber.
     * HTTP: POST /order-management/1/order/setTrackingNumber.
     *
     * @param SetOrderTrackingNumberPrompt $prompt DTO запроса.
     *
     * @return SetTrackingNumberResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setTrackingNumber(SetOrderTrackingNumberPrompt $prompt): SetTrackingNumberResponse
    {
        /** @var SetTrackingNumberResponse $response */
        $response = $this->request($prompt, SetTrackingNumberResponse::class);

        return $response;
    }
}
