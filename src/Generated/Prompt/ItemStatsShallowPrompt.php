<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt;

use Andy87\ClientsBase\Prompt\AbstractPrompt;

/**
 * Класс данных запроса Avito API [POST] /stats/v1/accounts/{user_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/item/documentation#operation/itemStatsShallow
 */
class ItemStatsShallowPrompt extends AbstractPrompt
{
    protected const METHOD = 'POST';

    protected const ENDPOINT = '/stats/v1/accounts/{user_id}/items';

    protected const CONTENT_TYPE = 'application/json';

    protected const AUTHORIZATION_REQUIRED = true;

    protected const QUERY_PARAMETER_STYLES = [];

    protected const FIELD_MAP = ['user_id' => 'user_id', 'Content_Type' => 'Content-Type', 'dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'fields' => 'fields', 'itemIds' => 'itemIds', 'periodGrouping' => 'periodGrouping'];

    protected const REQUIRED_FIELDS = ['user_id', 'Content_Type', 'dateFrom', 'dateTo', 'itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dateFrom' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom::class, 'dateTo' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo::class, 'fields' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields::class, 'itemIds' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs::class, 'periodGrouping' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping::class];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = ['Content_Type'];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'fields', 'itemIds', 'periodGrouping'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var string Тип данных запроса */
    public string $Content_Type;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom Body field dateFrom */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom $dateFrom;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo Body field dateTo */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo $dateTo;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields|null Body field fields */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields $fields = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs Body field itemIds */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs $itemIds;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping|null Body field periodGrouping */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping $periodGrouping = null;
}
