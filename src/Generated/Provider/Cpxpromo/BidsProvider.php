<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Cpxpromo;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\GetBidsPrompt;
use Andy87\ClientsAvito\Generated\Response\Cpxpromo\Bids\GetResponse;

/**
 * Группа методов "bids" раздела Avito API "Настройка цены целевого действия".
 */
class BidsProvider extends BaseAvitoProvider
{
    /**
     * Получение детализированной информации о действующих и доступных ценах за целевые действия и бюджетах
     * 
     * Метод позволяет получить детализированную информацию о действующих и доступных ценах целевого действия (в копейках), бюджетах (в копейках) и преимуществах перед конкурентами.
     * Максимальное количество запросов в минуту - 20
     * 
     * OperationId: getBids.
     * HTTP: GET /cpxpromo/1/getBids/{itemId}.
     *
     * @param GetBidsPrompt $prompt DTO запроса.
     *
     * @return GetResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function get(GetBidsPrompt $prompt): GetResponse
    {
        /** @var GetResponse $response */
        $response = $this->request($prompt, GetResponse::class);

        return $response;
    }
}
