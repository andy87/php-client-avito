<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Report_autoteka_async.
 */
class ReportAutotekaAsync extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'pdfLink' => 'pdfLink', 'reportId' => 'reportId', 'status' => 'status', 'webLink' => 'webLink'];

    protected const REQUIRED_FIELDS = ['reportId', 'status'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportDataAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\ReportDataAutoteka|null Schema field data */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\ReportDataAutoteka $data = null;

    /** @var string|null Ссылка на скачивание pdf версии отчета */
    public ?string $pdfLink = null;

    /** @var int Идентификатор сгенерированного отчета, по которому его можно получить */
    public int $reportId;

    /** @var string Текущий статус генерации отчет */
    public string $status;

    /** @var string|null Ссылка на web версию отчета */
    public ?string $webLink = null;
}
