<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Prompt\StopAutostrategyCampaignPrompt as BaseStopAutostrategyCampaignPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaign/stop.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/stopAutostrategyCampaign
 * 
 * @property int $campaignId Идентификатор активной кампании
 * @property int $version Текущая версия кампании
 */
class StopCampaignPrompt extends BaseStopAutostrategyCampaignPrompt
{
}
