<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryTariffZone-ServiceDeliveryC2CByWeight.
 */
class DeliveryTariffZoneServiceDeliveryC2CByWeight extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['calculationMechanic' => 'calculationMechanic', 'chargeableParameter' => 'chargeableParameter', 'serviceName' => 'serviceName', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['values', 'serviceName', 'calculationMechanic', 'chargeableParameter'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Механика расчета стоимости <br />
`GAP_TO_COST` - Механизм расчета при которой в зависимости от параметров отправления подбирается минимально возможное значение параметра `chargeableParameter` и соответствующая ему стоимость доставки
 */
    public string $calculationMechanic;

    /** @var string Параметр, относительно которого расчитывается стоимость доставки отправления
<br />
  `WEIGHT` - Расчет относительно веса отправления<br />
  `DIMENSIONS` - Расчет относительно габаритов отправления<br />
  `PAID_WEIGHT` - Расчет относительно платного веса (большего из реального и объемного весов)<br />
 */
    public string $chargeableParameter;

    /** @var string Услуга доставки C2C */
    public string $serviceName;

    /** @var array<int, array<string, mixed>> Список диапазонов весов и соответствующих им стоимостей */
    public array $values;
}
