<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestReportByPlateNumberAutoteka.
 */
class RequestReportByPlateNumberAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['plateNumber' => 'plateNumber'];

    protected const REQUIRED_FIELDS = ['plateNumber'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Регистрационный номер запрашиваемого авто. */
    public string $plateNumber;
}
