<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Item;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/StatisticsShallowRequestBody.
 */
class StatisticsShallowRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'fields' => 'fields', 'itemIds' => 'itemIds', 'periodGrouping' => 'periodGrouping'];

    protected const REQUIRED_FIELDS = ['itemIds', 'dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dateFrom' => \php_client_avito\Generated\Schema\Item\StatisticsDateFrom::class, 'dateTo' => \php_client_avito\Generated\Schema\Item\StatisticsDateTo::class, 'fields' => \php_client_avito\Generated\Schema\Item\StatisticsFields::class, 'itemIds' => \php_client_avito\Generated\Schema\Item\StatisticsItemIDs::class, 'periodGrouping' => \php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping::class];

    /** @var \php_client_avito\Generated\Schema\Item\StatisticsDateFrom Schema field dateFrom */
    public \php_client_avito\Generated\Schema\Item\StatisticsDateFrom $dateFrom;

    /** @var \php_client_avito\Generated\Schema\Item\StatisticsDateTo Schema field dateTo */
    public \php_client_avito\Generated\Schema\Item\StatisticsDateTo $dateTo;

    /** @var \php_client_avito\Generated\Schema\Item\StatisticsFields|null Schema field fields */
    public ?\php_client_avito\Generated\Schema\Item\StatisticsFields $fields = null;

    /** @var \php_client_avito\Generated\Schema\Item\StatisticsItemIDs Schema field itemIds */
    public \php_client_avito\Generated\Schema\Item\StatisticsItemIDs $itemIds;

    /** @var \php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping|null Schema field periodGrouping */
    public ?\php_client_avito\Generated\Schema\Item\StatisticsPeriodGrouping $periodGrouping = null;
}
