<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetReportResultAsync.
 */
class GetReportResultAsync extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['report' => 'report'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['report' => \php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync|null Schema field report */
    public ?\php_client_avito\Generated\Schema\Autoteka\ReportAutotekaAsync $report = null;
}
