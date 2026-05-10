<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetReportResult.
 */
class GetReportResult extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['report' => 'report'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['report' => \php_client_avito\Generated\Schema\Autoteka\ReportAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\ReportAutoteka|null Schema field report */
    public ?\php_client_avito\Generated\Schema\Autoteka\ReportAutoteka $report = null;
}
