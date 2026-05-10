<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response\Autoload\Report;

use and_y87\php_client_avito\Generated\Response\GetReportItemsFeesByIdResponse as BaseGetReportItemsFeesByIdResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items/fees.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsFeesById
 *
 * @property array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\ItemFeesInfoReportAutoloadV2>|null $fees Список списаний за размещение объявлений
 * @property array<string, mixed> $meta Данные пагинации
 * @property int $report_id Идентификатор отчёта (ID)
 */
class GetItemsFeesByIdResponse extends BaseGetReportItemsFeesByIdResponse
{
}
