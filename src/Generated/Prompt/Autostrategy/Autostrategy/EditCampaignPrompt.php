<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Prompt\EditAutostrategyCampaignPrompt as BaseEditAutostrategyCampaignPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaign/edit.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/editAutostrategyCampaign
 * 
 * @property int|null $budget Новый бюджет кампании в рублях
 * @property int|null $calcId Идентификатор расчета бюджета из ответа ручки `/autostrategy/v1/budget`
 * @property int $campaignId Идентификатор активной кампании
 * @property string|null $description Новое описание кампании
 * @property string|null $finishTime Новое время окончания кампании
 * @property array<int, int>|null $items Новый список индентификаторов объявлений, которые будут продвигаться с помощью данной кампании
 * @property string|null $startTime Новое время начала кампании
 * @property string|null $title Новое название кампании
 * @property int $version Текущая версия кампании
 */
class EditCampaignPrompt extends BaseEditAutostrategyCampaignPrompt
{
}
