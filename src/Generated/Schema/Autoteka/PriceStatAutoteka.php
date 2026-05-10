<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PriceStatAutoteka.
 */
class PriceStatAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['recaps' => 'recaps', 'report' => 'report', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['status', 'type', 'recaps', 'report'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['recaps' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class], 'report' => \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka::class];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka Schema field report */
    public \and_y87\php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka $report;

    /** @var string Полный или нет отчет */
    public string $status;

    /** @var string Источник данных */
    public string $type;
}
