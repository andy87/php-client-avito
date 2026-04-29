<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\OrderManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CncSetDetailsPrompt;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\Cnc\SetDetailsResponse;

/**
 * Группа методов "cnc" раздела Avito API "Управление заказами".
 */
class CncProvider extends BaseAvitoProvider
{
    /**
     * Метод для подготовки заказа с самовывозом
     * 
     * Данный метод применяется продавцом для подготовки заказа и передачи адреса, сроков бронирования и сообщения покупателю.
     * Максимальное количество запросов в минуту - 60
     * 
     * OperationId: cncSetDetails.
     * HTTP: POST /order-management/1/order/cncSetDetails.
     *
     * @param CncSetDetailsPrompt $prompt DTO запроса.
     *
     * @return SetDetailsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function setDetails(CncSetDetailsPrompt $prompt): SetDetailsResponse
    {
        /** @var SetDetailsResponse $response */
        $response = $this->request($prompt, SetDetailsResponse::class);

        return $response;
    }
}
