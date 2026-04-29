<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /order-management/1/orders/labels.
 * 
 * @documentation https://developers.avito.ru/api-catalog/order-management/documentation#operation/generateLabels
 */
class GenerateLabelsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/order-management/1/orders/labels';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['Authorization' => 'Authorization', 'orderIDs' => 'orderIDs'];

    protected const REQUIRED_FIELDS = ['Authorization', 'orderIDs'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = [];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['orderIDs'];

    /** @var string Токен для авторизации */
    public string $Authorization;

    /** @var array<int, string> ID заказов в сервисе сделок (marketplace) */
    public array $orderIDs;
}
