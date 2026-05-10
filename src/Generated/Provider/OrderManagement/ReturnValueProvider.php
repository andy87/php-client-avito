<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Provider\OrderManagement;

use and_y87\php_client_avito\BaseAvitoProvider;
use and_y87\php_client_avito\Generated\Prompt\AcceptReturnOrderPrompt;
use and_y87\php_client_avito\Generated\Response\OrderManagement\ReturnValue\AcceptOrderResponse;

/**
 * Группа методов "returnValue" раздела Avito API "Управление заказами".
 */
class ReturnValueProvider extends BaseAvitoProvider
{
    /**
     * Выбор отделения отделения Почты России для получения возврата
     *
     * Данный метод применяется для подтверждения возврата товара и выбора отделения Почты России, куда будет доставлен возврат.
     * Максимальное количество запросов в минуту - 100.
     *
     * OperationId: acceptReturnOrder.
     * HTTP: POST /order-management/1/order/acceptReturnOrder.
     *
     * @param AcceptReturnOrderPrompt $prompt DTO запроса.
     *
     * @return AcceptOrderResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function acceptOrder(AcceptReturnOrderPrompt $prompt): AcceptOrderResponse
    {
        /** @var AcceptOrderResponse $response */
        $response = $this->request($prompt, AcceptOrderResponse::class);

        return $response;
    }
}
