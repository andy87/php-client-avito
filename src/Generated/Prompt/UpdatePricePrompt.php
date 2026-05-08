<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/items/{item_id}/update_price.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/updatePrice
 */
class UpdatePricePrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/core/v1/items/{item_id}/update_price';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['price' => 'price', 'item_id' => 'item_id'];

    protected const REQUIRED_FIELDS = ['price', 'item_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['item_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['price'];

    /** @var int Цена */
    public int $price;
    /** @var string|int path-parameter item_id */
    public string|int $item_id;
}
