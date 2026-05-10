<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt;

use Andy87\PhpClientSdk\Prompt\AbstractPrompt;

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

    protected const FIELD_MAP = ['user_id' => 'user_id', 'dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'fields' => 'fields', 'itemIds' => 'itemIds', 'periodGrouping' => 'periodGrouping'];

    protected const REQUIRED_FIELDS = ['user_id', 'dateFrom', 'dateTo', 'itemIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dateFrom' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom::class, 'dateTo' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo::class, 'fields' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields::class, 'itemIds' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs::class, 'periodGrouping' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping::class];

    protected const PATH_FIELDS = ['user_id'];

    protected const QUERY_FIELDS = [];

    protected const HEADER_FIELDS = [];

    protected const BODY_FIELDS = ['dateFrom', 'dateTo', 'fields', 'itemIds', 'periodGrouping'];

    protected const BODY_ROOT_FIELD = null;

    /** @var int Идентификатор пользователя (клиента) */
    public int $user_id;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom Body field dateFrom */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom $dateFrom;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo Body field dateTo */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo $dateTo;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields|null Body field fields */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields $fields = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs Body field itemIds */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs $itemIds;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping|null Body field periodGrouping */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping $periodGrouping = null;
}
