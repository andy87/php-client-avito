<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autostrategy;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autostrategy/GetCampaignInfoRequestBody.
 */
class GetCampaignInfoRequestBody extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['campaignId' => 'campaignId'];

    protected const REQUIRED_FIELDS = ['campaignId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор активной кампании */
    public int $campaignId;
}
