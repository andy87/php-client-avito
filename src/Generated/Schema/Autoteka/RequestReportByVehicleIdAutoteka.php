<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

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
