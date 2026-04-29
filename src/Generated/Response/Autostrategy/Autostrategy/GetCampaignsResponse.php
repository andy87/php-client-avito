<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Response\GetAutostrategyCampaignsResponse as BaseGetAutostrategyCampaignsResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaigns.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaigns
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Campaign>|null $campaigns Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения
 * @property int|null $totalCount Общее количество кампаний, удовлетворяющих фильтрам
 */
class GetCampaignsResponse extends BaseGetAutostrategyCampaignsResponse
{
}
