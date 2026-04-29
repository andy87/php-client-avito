<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ReportWithoutDataAutoteka.
 */
class ReportWithoutDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['reportId' => 'reportId', 'status' => 'status'];

    protected const REQUIRED_FIELDS = ['reportId', 'status'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор сгенерированного отчета, по которому его можно получить */
    public int $reportId;

    /** @var string Текущий статус генерации отчета */
    public string $status;
}
