<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response\Autoload\Report;

use Andy87\ClientsAvito\Generated\Response\GetReportItemsByIdResponse as BaseGetReportItemsByIdResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsById
 * 
 * @property array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemInfoReportAutoloadV2> $items Список объявлений
 * @property \Andy87\ClientsAvito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2 $meta Response field meta
 * @property int $report_id Идентификатор отчёта (ID)
 */
class GetItemsByIdResponse extends BaseGetReportItemsByIdResponse
{
}
