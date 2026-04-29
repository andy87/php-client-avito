<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/orders/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/list_orders_by_user_v1
 */
class ListOrdersByUserV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/promotion/v1/items/services/orders/get';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['pagination' => 'pagination'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['pagination'];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['pagination'];

    /** @var array<string, mixed>|null Данные для постраничного чтения */
    public ?array $pagination = null;
}
