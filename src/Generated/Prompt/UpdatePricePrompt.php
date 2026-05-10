<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['item_id' => 'item_id', 'price' => 'price'];

    protected const REQUIRED_FIELDS = ['item_id', 'price'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['item_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['price'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор объявления на сайте */
    public int $item_id;

    /** @var int Цена */
    public int $price;
}
