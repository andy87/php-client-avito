<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v2/accounts/{user_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemAnalytics
 */
class ItemAnalyticsPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/stats/v2/accounts/{user_id}/items';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'Content_Type' => 'Content-Type', 'dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'filter' => 'filter', 'grouping' => 'grouping', 'limit' => 'limit', 'metrics' => 'metrics', 'offset' => 'offset', 'sort' => 'sort'];

    protected const REQUIRED_FIELDS = ['user_id', 'Content_Type', 'dateFrom', 'dateTo', 'grouping', 'limit', 'metrics', 'offset'];

    protected const NULLABLE_FIELDS = ['filter', 'limit', 'offset', 'sort'];

    protected const CASTS = ['grouping' => \Andy87\ClientsAvito\Generated\Schema\Item\Groupings::class];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['Content_Type'];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'filter', 'grouping', 'limit', 'metrics', 'offset', 'sort'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var string Тип данных запроса */
    public string $Content_Type;

    /** @var string Дата (в формате YYYY-MM-DD), с которой (включительно) надо получить статистику */
    public string $dateFrom;

    /** @var string Дата (в формате YYYY-MM-DD), по которую (включительно) надо получить статистику */
    public string $dateTo;

    /** @var array<string, mixed>|null Набор ограничений, по которым нужно отфильтровать данные */
    public ?array $filter = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\Groupings Body field grouping */
    public \Andy87\ClientsAvito\Generated\Schema\Item\Groupings $grouping;

    /** @var int|null Инструмент пагинации для ограничения количества сущностей в response; */
    public ?int $limit;

    /** @var array<int, string> Набор доступных показателей, которые должны присутствовать в ответе */
    public array $metrics;

    /** @var int|null инструмент пагинации или смещение, с которого начинается выборка данных; */
    public ?int $offset;

    /** @var array<string, mixed>|null Сортировка по заданному показателю */
    public ?array $sort = null;
}
