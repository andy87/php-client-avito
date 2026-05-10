<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoload\Report;

use and_y87\php_client_avito\Generated\Response\GetReportItemsByIdResponse as BaseGetReportItemsByIdResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsById
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\ItemInfoReportAutoloadV2> $items Список объявлений
 * @property \and_y87\php_client_avito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2 $meta Response field meta
 * @property int $report_id Идентификатор отчёта (ID)
 */
class GetItemsByIdResponse extends BaseGetReportItemsByIdResponse
{
}
