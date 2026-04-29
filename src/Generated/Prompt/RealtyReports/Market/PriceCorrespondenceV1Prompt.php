<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\RealtyReports\Market;

use Andy87\ClientsAvito\Generated\Prompt\MarketPriceCorrespondenceV1Prompt as BaseMarketPriceCorrespondenceV1Prompt;

/**
 * Класс данных запроса Avito API [GET] /realty/v1/marketPriceCorrespondence/{itemId}/{price}.
 * 
 * @documentation https://developers.avito.ru/api-catalog/realty-reports/documentation#operation/market_price_correspondence_v1
 * 
 * @property int $itemId Идентифиактор объявления
 * @property int $price Цена
 */
class PriceCorrespondenceV1Prompt extends BaseMarketPriceCorrespondenceV1Prompt
{
}
