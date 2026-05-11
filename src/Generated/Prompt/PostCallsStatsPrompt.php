<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use and_y87\PhpClientSdk\Request\Prompt\AbstractPrompt;

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

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'itemIds' => 'itemIds'];

    protected const REQUIRED_FIELDS = ['user_id', 'dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'itemIds'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Номер пользователя в Личном кабинете Авито */
    public int $user_id;

    /** @var string Начальная дата периода (YYYY-MM-DD) */
    public string $dateFrom;

    /** @var string Конечная дата периода (YYYY-MM-DD) */
    public string $dateTo;

    /** @var array<int, int>|null Идентификаторы объявлений */
    public ?array $itemIds = null;
}
