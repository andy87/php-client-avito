<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\OrderManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetCourierDeliveryRangePrompt;
use Andy87\ClientsAvito\Generated\Prompt\SetCourierDeliveryRangePrompt;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Courier\GetDeliveryRangeResponse;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Courier\SetDeliveryRangeResponse;

/**
 * Группа методов "courier" раздела Avito API "Управление заказами".
 */
class CourierProvider extends BaseAvitoProvider
{
    /**
     * Метод получения доступных временных промежутков приезда курьера
     * 
     * Данный метод применяется для получения всех промежутков времени, когда курьер может приехать забрать товар, чтобы отвезти его покупателю.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: getCourierDeliveryRange.
     * HTTP: GET /order-management/1/order/getCourierDeliveryRange.
     *
     * @param GetCourierDeliveryRangePrompt $prompt DTO запроса.
     *
     * @return GetDeliveryRangeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getDeliveryRange(GetCourierDeliveryRangePrompt $prompt): GetDeliveryRangeResponse
    {
        /** @var GetDeliveryRangeResponse $response */
        $response = $this->request($prompt, GetDeliveryRangeResponse::class);

        return $response;
    }

    /**
     * Метод выбора определённого доступного временного промежутка для приезда курьера
     * 
     * Данный метод применяется после метода получения всех промежутков времени, когда курьер может приехать и забрать товар.  Вызвав этот метод, продавец выбирает определённый временной промежуток приезда курьера.
     * Также этот метод можно вызвать, чтобы изменить время приезда курьера, если он ещё не забрал посылку. Максимальное количество запросов в минуту - 200.
     * 
     * OperationId: setCourierDeliveryRange.
     * HTTP: POST /order-management/1/order/setCourierDeliveryRange.
     *
     * @param SetCourierDeliveryRangePrompt $prompt DTO запроса.
     *
     * @return SetDeliveryRangeResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setDeliveryRange(SetCourierDeliveryRangePrompt $prompt): SetDeliveryRangeResponse
    {
        /** @var SetDeliveryRangeResponse $response */
        $response = $this->request($prompt, SetDeliveryRangeResponse::class);

        return $response;
    }
}
