<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/accounts/{user_id}/items/{item_id}/prices.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postRealtyPrices
 */
class PostRealtyPricesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/realty/v1/accounts/{user_id}/items/{item_id}/prices';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['prices' => 'prices'];

    protected const REQUIRED_FIELDS = ['prices'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['prices' => [\Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['prices'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty> Body field prices */
    public array $prices;
}
