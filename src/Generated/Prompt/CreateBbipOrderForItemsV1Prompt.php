<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [PUT] /promotion/v1/items/services/bbip/orders/create.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/create_bbip_order_for_items_v1
 */
class CreateBbipOrderForItemsV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'PUT';

    protected const ENDPOINT = '/promotion/v1/items/services/bbip/orders/create';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['items' => 'items'];

    protected const REQUIRED_FIELDS = ['items'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\Andy87\ClientsAvito\Generated\Schema\Promotion\BbipOrderByItemV1::class]];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['items'];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Promotion\BbipOrderByItemV1> Заявки на подключение BBIP по отдельным объявлениям */
    public array $items;
}
