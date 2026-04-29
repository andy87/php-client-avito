<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyCampaignsPrompt as BaseGetAutostrategyCampaignsPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/campaigns.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyCampaigns
 * 
 * @property array<string, mixed>|null $filter Фильтр
 * @property int $limit Ограничение на выборку
 * @property int|null $offset Смещение выборки, по умолчанию равно 0
 * @property array<int, array<string, mixed>>|null $orderBy Поля, по которым будет произведена сортировка, и тип сортировки
 * @property array<int, int>|null $statusId Статусы кампании для выборки. Возможные статусы:<br/> `0` - Черновик, дата старта сегодня или раньше, денег на балансе нет<br/> `1` - Активная кампания<br/> `2` - Кампания приостановлена<br/> `3` - Кампания удалена<br/> `4` - Кампания остановлена<br/> `5` - Кампания запланирована, дата старта завтра или позже, на балансе есть деньги<br/> По умолчанию в выборку попадают кампании со статусами 0, 1, 2, 4, 5.<br/>
 */
class GetCampaignsPrompt extends BaseGetAutostrategyCampaignsPrompt
{
}
