<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Response;

use Andy87\PhpClientSdk\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items.
 *
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsById
 */
class GetReportItemsByIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['items' => 'items', 'meta' => 'meta', 'report_id' => 'report_id'];

    protected const REQUIRED_FIELDS = ['report_id', 'items', 'meta'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['items' => [\and_y87\php_client_avito\Generated\Schema\Autoload\ItemInfoReportAutoloadV2::class], 'meta' => \and_y87\php_client_avito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2::class];

    protected const MODEL = null;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoload\ItemInfoReportAutoloadV2> Список объявлений */
    public array $items;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2 Response field meta */
    public \and_y87\php_client_avito\Generated\Schema\Autoload\MetaReportItemsAutoloadV2 $meta;

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;
}
