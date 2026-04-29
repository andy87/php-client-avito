<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autostrategy\Autostrategy;

use Andy87\ClientsAvito\Generated\Response\GetAutostrategyStatResponse as BaseGetAutostrategyStatResponse;

/**
 * Ответ Avito API [POST] /autostrategy/v1/stat.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autostrategy/documentation#operation/getAutostrategyStat
 * 
 * @property \Andy87\ClientsAvito\Generated\Schema\Autostrategy\Stat|null $stat Response field stat
 * @property array<string, mixed>|null $totals Статистика, просумированная за все дни
 */
class GetStatResponse extends BaseGetAutostrategyStatResponse
{
}
