<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /realty/v1/marketPriceCorrespondence/{itemId}/{price}.
 *
 * @documentation https://developers.avito.ru/api-catalog/realty-reports/documentation#operation/market_price_correspondence_v1
 */
class MarketPriceCorrespondenceV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/realty/v1/marketPriceCorrespondence/{itemId}/{price}';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['itemId' => 'itemId', 'price' => 'price'];

    protected const REQUIRED_FIELDS = ['itemId', 'price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['itemId', 'price'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = [];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентифиактор объявления */
    public int $itemId;

    /** @var int Цена */
    public int $price;
}
