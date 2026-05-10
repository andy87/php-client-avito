<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetReportResultAsync.
 */
class GetReportResultAsync extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['report' => 'report'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['report' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync|null Schema field report */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync $report = null;
}
