<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Item;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito item/StatisticsShallowRequestBody.
 */
class StatisticsShallowRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dateFrom' => 'dateFrom', 'dateTo' => 'dateTo', 'fields' => 'fields', 'itemIds' => 'itemIds', 'periodGrouping' => 'periodGrouping'];

    protected const REQUIRED_FIELDS = ['itemIds', 'dateFrom', 'dateTo'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['dateFrom' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom::class, 'dateTo' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo::class, 'fields' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields::class, 'itemIds' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs::class, 'periodGrouping' => \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom Schema field dateFrom */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateFrom $dateFrom;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo Schema field dateTo */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsDateTo $dateTo;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields|null Schema field fields */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\StatisticsFields $fields = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs Schema field itemIds */
    public \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsItemIDs $itemIds;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping|null Schema field periodGrouping */
    public ?\Andy87\ClientsAvito\Generated\Schema\Item\StatisticsPeriodGrouping $periodGrouping = null;
}
