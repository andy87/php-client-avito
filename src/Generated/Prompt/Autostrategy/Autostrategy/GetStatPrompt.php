<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Prompt\Autostrategy\Autostrategy;

use and_y87\php_client_avito\Generated\Prompt\GetAutostrategyStatPrompt as BaseGetAutostrategyStatPrompt;

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
