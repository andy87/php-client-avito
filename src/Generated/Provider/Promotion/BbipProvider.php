<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\Promotion;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateBbipOrderForItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetBbipForecastsByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Prompt\GetBbipSuggestsByItemsV1Prompt;
use Andy87\ClientsAvito\Generated\Response\Promotion\Bbip\CreateOrderForItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\Promotion\Bbip\GetForecastsByItemsV1Response;
use Andy87\ClientsAvito\Generated\Response\Promotion\Bbip\GetSuggestsByItemsV1Response;

/**
 * Группа методов "bbip" раздела Avito API "Продвижение".
 */
class BbipProvider extends BaseAvitoProvider
{
    /**
     * BBIP. Подключение услуги продвижения
     * 
     * Создать заявку на подключение услуг продвижения.
     * 
     * Создание заявки для набора объявлений возможно только в случае если ни по одному из объявлений не возникло ошибок.
     * 
     * При успешном создании заявки система возвращает `orderId` (идентификатор заявки),
     * на основе которого можно проверять как статус заявки, так и статус подключения услуг по объявлениям.
     * 
     * **Rate limit:** 10 RPM
     * 
     * OperationId: create_bbip_order_for_items_v1.
     * HTTP: PUT /promotion/v1/items/services/bbip/orders/create.
     *
     * @param CreateBbipOrderForItemsV1Prompt $prompt DTO запроса.
     *
     * @return CreateOrderForItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function createOrderForItemsV1(CreateBbipOrderForItemsV1Prompt $prompt): CreateOrderForItemsV1Response
    {
        /** @var CreateOrderForItemsV1Response $response */
        $response = $this->request($prompt, CreateOrderForItemsV1Response::class);

        return $response;
    }

    /**
     * BBIP. Прогноз продвижения
     * 
     * Получение прогноза продвижения по объявлениям
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_bbip_forecasts_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/bbip/forecasts/get.
     *
     * @param GetBbipForecastsByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetForecastsByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getForecastsByItemsV1(GetBbipForecastsByItemsV1Prompt $prompt): GetForecastsByItemsV1Response
    {
        /** @var GetForecastsByItemsV1Response $response */
        $response = $this->request($prompt, GetForecastsByItemsV1Response::class);

        return $response;
    }

    /**
     * BBIP. Варианты бюджета продвижения
     * 
     * Получение доступных вариантов бюджета для продвижения
     * 
     * **Rate limit:** 100 RPM
     * 
     * OperationId: get_bbip_suggests_by_items_v1.
     * HTTP: POST /promotion/v1/items/services/bbip/suggests/get.
     *
     * @param GetBbipSuggestsByItemsV1Prompt $prompt DTO запроса.
     *
     * @return GetSuggestsByItemsV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function getSuggestsByItemsV1(GetBbipSuggestsByItemsV1Prompt $prompt): GetSuggestsByItemsV1Response
    {
        /** @var GetSuggestsByItemsV1Response $response */
        $response = $this->request($prompt, GetSuggestsByItemsV1Response::class);

        return $response;
    }
}
