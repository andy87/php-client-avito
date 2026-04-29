<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetReport.
 */
class GetReport extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResult::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResult|null Schema field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\GetReportResult $result = null;
}
