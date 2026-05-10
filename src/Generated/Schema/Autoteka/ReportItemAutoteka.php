<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

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
