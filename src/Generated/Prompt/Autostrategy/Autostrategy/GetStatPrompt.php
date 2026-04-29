<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Prompt\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Prompt\GetAutostrategyStatPrompt as BaseGetAutostrategyStatPrompt;

/**
 * Класс данных запроса Avito API [POST] /autostrategy/v1/stat.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyStat
 * 
 * @property int $campaignId Идентификатор запущенной или уже прошедшей кампании
 */
class GetStatPrompt extends BaseGetAutostrategyStatPrompt
{
}
