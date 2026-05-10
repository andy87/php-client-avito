<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
