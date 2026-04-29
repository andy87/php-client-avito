<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryTariffZone-ServiceDeliveryB2CWithStepCost.
 */
class DeliveryTariffZoneServiceDeliveryB2CWithStepCost extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calculationMechanic' => 'calculationMechanic', 'chargeableParameter' => 'chargeableParameter', 'serviceName' => 'serviceName', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['serviceName', 'calculationMechanic', 'chargeableParameter', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Механика расчета стоимости, при которой указывается диапазон с начальной стоимостью, шагом и ценой за шаг.
 */
    public string $calculationMechanic;

    /** @var string При значении `WEIGHT` работает такая логика подсчета цены: cost + ((Вес товара - minWeight) / step с округлением вверх) * costPerStep
 */
    public string $chargeableParameter;

    /** @var string Услуга доставки */
    public string $serviceName;

    /** @var array<int, array<string, mixed>> Список диапазонов весов с начальной стоимостью, шагом и ценой за шаг. */
    public array $values;
}
