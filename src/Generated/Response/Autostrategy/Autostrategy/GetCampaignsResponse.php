<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autostrategy\Autostrategy;

use and_y87\php_client_avito\Generated\Response\GetAutostrategyCampaignsResponse as BaseGetAutostrategyCampaignsResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/campaigns.
 *
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaigns
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Autostrategy\Campaign>|null $campaigns Список кампаний, удовлетворяющих фильтрам, с учетом смещения и ограничения
 * @property int|null $totalCount Общее количество кампаний, удовлетворяющих фильтрам
 */
class GetCampaignsResponse extends BaseGetAutostrategyCampaignsResponse
{
}
