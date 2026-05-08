<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{userId}/vas/prices.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/vasPrices
 */
class VasPricesPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/core/v1/accounts/{userId}/vas/prices';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['itemIds' => 'itemIds', 'userId' => 'userId'];

    protected const REQUIRED_FIELDS = ['itemIds', 'userId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['userId'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemIds'];

    /** @var array<int, int> Набор идентификаторов объявлений на сайте */
    public array $itemIds;
    /** @var string|int path-parameter userId */
    public string|int $userId;
}
