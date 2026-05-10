<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestReportByVehicleIdAutoteka.
 */
class RequestReportByVehicleIdAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['vehicleId' => 'vehicleId'];

    protected const REQUIRED_FIELDS = ['vehicleId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор запрашиваемого авто (vin/frame). */
    public string $vehicleId;
}
