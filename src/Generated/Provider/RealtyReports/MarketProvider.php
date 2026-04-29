<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider\RealtyReports;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\MarketPriceCorrespondenceV1Prompt;
use Andy87\ClientsAvito\Generated\Response\RealtyReports\Market\PriceCorrespondenceV1Response;

/**
 * Группа методов "market" раздела Avito API "Аналитика по недвижимости".
 */
class MarketProvider extends BaseAvitoProvider
{
    /**
     * Получение соответствия переданной цены рыночной цене
     * 
     * Получение соответствия переданной цены рыночной цене
     * 
     * **Данный метод доступен только пользователям с активной подпиской «Лидер» в категории «Недвижимость»**
     * 
     * OperationId: market_price_correspondence_v1.
     * HTTP: GET /realty/v1/marketPriceCorrespondence/{itemId}/{price}.
     *
     * @param MarketPriceCorrespondenceV1Prompt $prompt DTO запроса.
     *
     * @return PriceCorrespondenceV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function priceCorrespondenceV1(MarketPriceCorrespondenceV1Prompt $prompt): PriceCorrespondenceV1Response
    {
        /** @var PriceCorrespondenceV1Response $response */
        $response = $this->request($prompt, PriceCorrespondenceV1Response::class);

        return $response;
    }
}
