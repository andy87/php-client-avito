<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaign/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaignInfo
 */
class GetAutostrategyCampaignInfoResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['campaign' => 'campaign', 'forecast' => 'forecast', 'items' => 'items'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['campaign' => \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign::class, 'forecast' => \Andy87\ClientsAvito\Generated\Schema\Autostrategy\GetCampaignInfoForecastResult::class];

    protected const MODEL = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign|null Response field campaign */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign $campaign = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autostrategy\GetCampaignInfoForecastResult|null Response field forecast */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autostrategy\GetCampaignInfoForecastResult $forecast = null;

    /** @var array<int, array<string, mixed>>|null Список индентификаторов объявлений, которые продвигаются/продвигались в данной кампании */
    public ?array $items = null;
}
