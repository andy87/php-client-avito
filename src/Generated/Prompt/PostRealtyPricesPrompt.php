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

    protected const FIELD_MAP = ['prices' => 'prices', 'user_id' => 'user_id', 'item_id' => 'item_id'];

    protected const REQUIRED_FIELDS = ['prices', 'user_id', 'item_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['prices' => [\Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty::class]];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['prices'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty> Body field prices */
    public array $prices;
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter item_id */
    public string|int $item_id;
}
