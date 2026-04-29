<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Str\Realty;

use Andy87\ClientsAvito\Generated\Prompt\PostRealtyPricesPrompt as BasePostRealtyPricesPrompt;

/**
 * Класс данных запроса Avito API [POST] /realty/v1/accounts/{user_id}/items/{item_id}/prices.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/postRealtyPrices
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Str\ParamPriceItemRealty> $prices Body field prices
 */
class PostPricesPrompt extends BasePostRealtyPricesPrompt
{
}
