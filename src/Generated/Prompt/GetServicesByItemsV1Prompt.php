<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/get.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_services_by_items_v1
 */
class GetServicesByItemsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/promotion/v1/items/services/get';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['itemIds'];

    /** @var array<int, int>|null Идентификаторы объявлений */
    public ?array $itemIds = null;
}
