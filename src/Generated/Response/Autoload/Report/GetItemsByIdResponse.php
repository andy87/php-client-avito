<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Response\Autoload\Report;

use php_client_avito\Generated\Response\GetReportItemsByIdResponse as BaseGetReportItemsByIdResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsById
 *
 * @property array<int, \php_client_avito\Generated\Schema\Autoload\ItemInfoReportAutoloadV2> $items Список объявлений
 * @property \php_client_avito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2 $meta Response field meta
 * @property int $report_id Идентификатор отчёта (ID)
 */
class GetItemsByIdResponse extends BaseGetReportItemsByIdResponse
{
}
