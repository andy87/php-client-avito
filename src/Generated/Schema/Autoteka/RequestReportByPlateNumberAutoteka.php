<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
