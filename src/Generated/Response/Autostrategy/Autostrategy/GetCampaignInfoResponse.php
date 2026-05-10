<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autostrategy\Autostrategy;

use php_client_avito\Generated\Response\GetAutostrategyCampaignInfoResponse as BaseGetAutostrategyCampaignInfoResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaign/info.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaignInfo
 *
 * @property \php_client_avito\Generated\Schema\Autostrategy\Campaign|null $campaign Response field campaign
 * @property \php_client_avito\Generated\Schema\Autostrategy\GetCampaignInfoForecastResult|null $forecast Response field forecast
 * @property array<int, array<string, mixed>>|null $items Список индентификаторов объявлений, которые продвигаются/продвигались в данной кампании
 */
class GetCampaignInfoResponse extends BaseGetAutostrategyCampaignInfoResponse
{
}
