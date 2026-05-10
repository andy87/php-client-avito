<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autostrategy;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/StopCampaignRequestBody.
 */
class StopCampaignRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaignId' => 'campaignId', 'version' => 'version'];

    protected const REQUIRED_FIELDS = ['campaignId', 'version'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор активной кампании */
    public int $campaignId;

    /** @var int Текущая версия кампании */
    public int $version;
}
