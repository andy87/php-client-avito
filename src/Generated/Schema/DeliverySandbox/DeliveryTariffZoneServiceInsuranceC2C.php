<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryTariffZone-ServiceInsuranceC2C.
 */
class DeliveryTariffZoneServiceInsuranceC2C extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calculationMechanic' => 'calculationMechanic', 'chargeableParameter' => 'chargeableParameter', 'serviceName' => 'serviceName', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['serviceName', 'calculationMechanic', 'chargeableParameter', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Механика расчета стоимости */
    public string $calculationMechanic;

    /** @var string Schema field chargeableParameter */
    public string $chargeableParameter;

    /** @var string Schema field serviceName */
    public string $serviceName;

    /** @var array<int, array<string, mixed>> Список значений для рассчета страховки. */
    public array $values;
}
