<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autostrategy;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/Campaigns.
 */
class Campaigns extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaigns' => 'campaigns', 'totalCount' => 'totalCount'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaigns' => [\php_client_avito\Generated\Schema\Autostrategy\Campaign::class]];

    /** @var array<int, \php_client_avito\Generated\Schema\Autostrategy\Campaign>|null Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения */
    public ?array $campaigns = null;

    /** @var int|null Общее количество кампаний, удовлетворяющих фильтрам */
    public ?int $totalCount = null;
}
