<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Item;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/StatisticsShallowRequestBody.
 */
class StatisticsShallowRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'fields' => 'fields', 'itemIds' => 'itemIds', 'periodGrouping' => 'periodGrouping'];

    protected const REQUIRED_FIELDS = ['itemIds', 'dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dateFrom' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom::class, 'dateTo' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo::class, 'fields' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields::class, 'itemIds' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs::class, 'periodGrouping' => \and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom Schema field dateFrom */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateFrom $dateFrom;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo Schema field dateTo */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsDateTo $dateTo;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields|null Schema field fields */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\StatisticsFields $fields = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs Schema field itemIds */
    public \and_y87\php_client_avito\Generated\Schema\Item\StatisticsItemIDs $itemIds;

    /** @var \and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping|null Schema field periodGrouping */
    public ?\and_y87\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping $periodGrouping = null;
}
