<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [GET] /realty/v1/accounts/{user_id}/items/{item_id}/bookings.
 * 
 * @documentation https://developers.avito.ru/api-catalog/str/documentation#operation/getRealtyBookings
 */
class GetRealtyBookingsPrompt extends AbstractPrompt
{
    protected const METHOD = 'GET';

    protected const ENDPOINT = '/realty/v1/accounts/{user_id}/items/{item_id}/bookings';

    protected const CONTENT_TYPE = null;

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['user_id' => 'user_id', 'item_id' => 'item_id'];

    protected const REQUIRED_FIELDS = ['user_id', 'item_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id', 'item_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = [];
    /** @var string|int path-parameter user_id */
    public string|int $user_id;

    /** @var string|int path-parameter item_id */
    public string|int $item_id;
}
