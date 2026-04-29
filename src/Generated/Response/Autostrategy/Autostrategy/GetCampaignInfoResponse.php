<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Response\GetAutostrategyCampaignInfoResponse as BaseGetAutostrategyCampaignInfoResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaign/info.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaignInfo
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign|null $campaign Response field campaign
 * @property \Andy87\ClientsAvito\Generated\Schema\Autostrategy\GetCampaignInfoForecastResult|null $forecast Response field forecast
 * @property array<int, array<string, mixed>>|null $items Список индентификаторов объявлений, которые продвигаются/продвигались в данной кампании
 */
class GetCampaignInfoResponse extends BaseGetAutostrategyCampaignInfoResponse
{
}
