<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ReportItem_autoteka.
 */
class ReportItemAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['createdAt' => 'createdAt', 'reportId' => 'reportId', 'vin' => 'vin'];

    protected const REQUIRED_FIELDS = ['vin', 'createdAt', 'reportId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Дата и время генерации отчета */
    public string $createdAt;

    /** @var int Идентификатор сгенерированного отчета, по которому его можно получить */
    public int $reportId;

    /** @var string ВИН-номер */
    public string $vin;
}
