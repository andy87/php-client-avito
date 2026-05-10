<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\RealtyReports\Market;

use php_client_avito\Generated\Response\MarketPriceCorrespondenceV1Response as BaseMarketPriceCorrespondenceV1Response;

/**
 * Ответ Avito API [GET] /realty/v1/marketPriceCorrespondence/{itemId}/{price}.
 *
 * @documentation https://developers.avito.ru/api-catalog/realty-reports/documentation#operation/market_price_correspondence_v1
 *
 * @property string|null $correspondence Признак соответствия рыночной цене - below - цена ниже рыночной - normal - цена соответствует рыночной - above - цена выше рыночной
 * @property \php_client_avito\Generated\Schema\RealtyReports\Error|null $errorData Response field error
 */
class PriceCorrespondenceV1Response extends BaseMarketPriceCorrespondenceV1Response
{
}
