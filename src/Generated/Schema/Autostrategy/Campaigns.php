<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/Campaigns.
 */
class Campaigns extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaigns' => 'campaigns', 'totalCount' => 'totalCount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaigns' => [\Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign>|null Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения */
    public ?array $campaigns = null;

    /** @var int|null Общее количество кампаний, удовлетворяющих фильтрам */
    public ?int $totalCount = null;
}
