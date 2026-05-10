<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PriceStatAutoteka.
 */
class PriceStatAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['recaps' => 'recaps', 'report' => 'report', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['status', 'type', 'recaps', 'report'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['recaps' => [\php_client_avito\Generated\Schema\Autoteka\RecapAutoteka::class], 'report' => \php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka::class];

    /** @var array<int, \php_client_avito\Generated\Schema\Autoteka\RecapAutoteka> Суммарная информация */
    public array $recaps;

    /** @var \php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka Schema field report */
    public \php_client_avito\Generated\Schema\Autoteka\PriceStatReportAutoteka $report;

    /** @var string Полный или нет отчет */
    public string $status;

    /** @var string Источник данных */
    public string $type;
}
