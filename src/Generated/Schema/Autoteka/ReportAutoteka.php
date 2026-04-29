<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Report_autoteka.
 */
class ReportAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['data' => 'data', 'pdfLink' => 'pdfLink', 'reportId' => 'reportId', 'status' => 'status', 'webLink' => 'webLink'];

    protected const REQUIRED_FIELDS = ['reportId', 'status'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['data' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportDataAutoteka|null Schema field data */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\ReportDataAutoteka $data = null;

    /** @var string|null Ссылка на скачивание pdf версии отчета */
    public ?string $pdfLink = null;

    /** @var int Идентификатор сгенерированного отчета, по которому его можно получить */
    public int $reportId;

    /** @var string Текущий статус генерации отчет */
    public string $status;

    /** @var string|null Ссылка на web версию отчета */
    public ?string $webLink = null;
}
