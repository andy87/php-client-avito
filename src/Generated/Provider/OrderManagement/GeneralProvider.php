<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\OrderManagement;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\MarkingsPrompt;
use Andy87\ClientsAvito\Generated\Response\OrderManagement\General\MarkingsResponse;

/**
 * Группа методов "general" раздела Avito API "Управление заказами".
 */
class GeneralProvider extends BaseAvitoProvider
{
    /**
     * Передача честного знака
     * 
     * Метод для передачи честного знака для товаров в заказе.
     * Максимальное количество элементов в одном запросе - 50.
     * Максимальное количество запросов в минуту - 100.
     * 
     * OperationId: markings.
     * HTTP: POST /order-management/1/markings.
     *
     * @param MarkingsPrompt $prompt DTO запроса.
     *
     * @return MarkingsResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function markings(MarkingsPrompt $prompt): MarkingsResponse
    {
        /** @var MarkingsResponse $response */
        $response = $this->request($prompt, MarkingsResponse::class);

        return $response;
    }
}
