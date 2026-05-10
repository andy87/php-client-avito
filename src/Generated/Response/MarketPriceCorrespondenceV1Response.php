<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /realty/v1/marketPriceCorrespondence/{itemId}/{price}.
 *
 * @documentation https://developers.avito.ru/api-catalog/realty-reports/documentation#operation/market_price_correspondence_v1
 */
class MarketPriceCorrespondenceV1Response extends AbstractResponse
{
    protected const FIELD_MAP = ['correspondence' => 'correspondence', 'errorData' => 'error'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['errorData' => \php_client_avito\Generated\Schema\RealtyReports\Error::class];

    protected const MODEL = null;

    /** @var string|null Признак соответствия рыночной цене
- below - цена ниже рыночной
- normal - цена соответствует рыночной
- above - цена выше рыночной */
    public ?string $correspondence = null;

    /** @var \php_client_avito\Generated\Schema\RealtyReports\Error|null Response field error */
    public ?\php_client_avito\Generated\Schema\RealtyReports\Error $errorData = null;
}
