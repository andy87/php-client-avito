<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryTariffZone-ServiceDeliveryC2CWithStepMinCost.
 */
class DeliveryTariffZoneServiceDeliveryC2CWithStepMinCost extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calculationMechanic' => 'calculationMechanic', 'chargeableParameter' => 'chargeableParameter', 'minCost' => 'minCost', 'serviceName' => 'serviceName', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['serviceName', 'calculationMechanic', 'chargeableParameter', 'minCost', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Механика расчета стоимости, при которой указывается диапазон с начальной стоимостью, шагом и ценой за шаг, а также минимальной ценой за доставку.
 */
    public string $calculationMechanic;

    /** @var string При значении `WEIGHT` или `PAID_WEIGHT` работает такая логика подсчета цены: cost + ((Платный вес товара - minWeight) / step с округлением вверх) * costPerStep
 */
    public string $chargeableParameter;

    /** @var int Минимальная цена за доставку в копейках. Применяется, если посчитанная цена за доставку на основе values оказалась ниже minCost */
    public int $minCost;

    /** @var string Услуга доставки */
    public string $serviceName;

    /** @var array<int, array<string, mixed>> Список диапазонов весов с начальной стоимостью, шагом и ценой за шаг. */
    public array $values;
}
