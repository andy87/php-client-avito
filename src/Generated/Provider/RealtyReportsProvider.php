<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Provider;

use Andy87\ClientsAvito\BaseAvitoProvider;
use Andy87\ClientsAvito\Generated\Prompt\CreateReportForClassifiedPrompt;
use Andy87\ClientsAvito\Generated\Prompt\MarketPriceCorrespondenceV1Prompt;
use Andy87\ClientsAvito\Generated\Response\CreateReportForClassifiedResponse;
use Andy87\ClientsAvito\Generated\Response\MarketPriceCorrespondenceV1Response;

/**
 * Provider раздела Avito API "Аналитика по недвижимости".
 * @property-read RealtyReports\MarketProvider $market
 * @property-read RealtyReports\ReportProvider $report
 *
 */
class RealtyReportsProvider extends BaseAvitoProvider
{
    protected const OPERATION_GROUPS = [
        'market' => RealtyReports\MarketProvider::class,
        'report' => RealtyReports\ReportProvider::class,
    ];

    /**
     * Получение аналитического отчета по недвижимости
     * 
     * Получение аналитического отчета по недвижимости
     * 
     * **Данный метод доступен только пользователям с активной подпиской «Лидер» в категории «Недвижимость»**
     * 
     * OperationId: CreateReportForClassified.
     * HTTP: POST /realty/v1/report/create/{itemId}.
     *
     * @param CreateReportForClassifiedPrompt $prompt DTO запроса.
     *
     * @return CreateReportForClassifiedResponse DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function CreateReportForClassified(CreateReportForClassifiedPrompt $prompt): CreateReportForClassifiedResponse
    {
        /** @var RealtyReports\ReportProvider $group */
        $group = $this->operationGroup('report');

        return $group->createForClassified($prompt);
    }

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
     * @return MarketPriceCorrespondenceV1Response DTO ответа.
     *
     * @throws \InvalidArgumentException Если Prompt невалиден.
     * @throws \RuntimeException Если запрос или авторизация завершились ошибкой.
     * @throws \UnexpectedValueException Если обязательные поля успешного ответа отсутствуют.
     */
    public function market_price_correspondence_v1(MarketPriceCorrespondenceV1Prompt $prompt): MarketPriceCorrespondenceV1Response
    {
        /** @var RealtyReports\MarketProvider $group */
        $group = $this->operationGroup('market');

        return $group->priceCorrespondenceV1($prompt);
    }
}
