<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PriceStatAutoteka.
 */
class PriceStatAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['recaps' => 'recaps', 'report' => 'report', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['status', 'type', 'recaps', 'report'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['recaps' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka::class], 'report' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatReportAutoteka::class];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatReportAutoteka Schema field report */
    public \Andy87\ClientsAvito\Generated\Schema\Autoteka\PriceStatReportAutoteka $report;

    /** @var string Полный или нет отчет */
    public string $status;

    /** @var string Источник данных */
    public string $type;
}
