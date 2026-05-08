<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /core/v1/accounts/{user_id}/calls/stats/.
 * 
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/postCallsStats
 */
class PostCallsStatsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/core/v1/accounts/{user_id}/calls/stats/';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'itemIds' => 'itemIds', 'user_id' => 'user_id'];

    protected const REQUIRED_FIELDS = ['dateFrom', 'dateTo', 'user_id'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'itemIds'];

    /** @var string Начальная дата периода (YYYY-MM-DD) */
    public string $dateFrom;

    /** @var string Конечная дата периода (YYYY-MM-DD) */
    public string $dateTo;

    /** @var array<int, int>|null Идентификаторы объявлений */
    public ?array $itemIds = null;
    /** @var string|int path-parameter user_id */
    public string|int $user_id;
}
