<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Response;

use Andy87\ClientsBase\Response\AbstractResponse;

/**
 * Ответ Avito API [GET] /autoload/v2/reports/{report_id}/items/fees.
 * 
 * @documentation https://developers.avito.ru/api-catalog/autoload/documentation#operation/getReportItemsFeesById
 */
class GetReportItemsFeesByIdResponse extends AbstractResponse
{
    protected const FIELD_MAP = ['fees' => 'fees', 'meta' => 'meta', 'report_id' => 'report_id'];

    protected const REQUIRED_FIELDS = ['report_id', 'items', 'meta'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fees' => [\Andy87\ClientsAvito\Generated\Schema\Autoload\ItemFeesInfoReportAutoloadV2::class]];

    protected const MODEL = null;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoload\ItemFeesInfoReportAutoloadV2>|null Список списаний за размещение объявлений */
    public ?array $fees = null;

    /** @var array<string, mixed> Данные пагинации */
    public array $meta;

    /** @var int Идентификатор отчёта (ID) */
    public int $report_id;
}
