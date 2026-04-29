<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateReportResponseDataAutoteka.
 */
class CreateReportResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['report' => 'report'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['report' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportWithoutDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportWithoutDataAutoteka|null Schema field report */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportWithoutDataAutoteka $report = null;
}
