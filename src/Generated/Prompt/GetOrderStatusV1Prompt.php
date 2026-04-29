<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /promotion/v1/items/services/orders/status.
 * 
 * @documentation https://developers.avito.ru/api-catalog/promotion/documentation#operation/get_order_status_v1
 */
class GetOrderStatusV1Prompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/promotion/v1/items/services/orders/status';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['orderId' => 'orderId'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['orderId'];

    /** @var string|null Идентификатор заявки на подключение услуг продвижения */
    public ?string $orderId = null;
}
