<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AddTariffRequest.
 */
class AddTariffRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderTariffId' => 'deliveryProviderTariffId', 'directions' => 'directions', 'name' => 'name', 'tariffZones' => 'tariffZones'];

    protected const REQUIRED_FIELDS = ['name', 'deliveryProviderTariffId', 'directions', 'tariffZones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['directions' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Direction::class], 'tariffZones' => [\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TariffZone::class]];

    /** @var string Идентификатор тарифного плана на стороне службы доставки - должен быть уникален.
 */
    public string $deliveryProviderTariffId;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\Direction> Schema field directions */
    public array $directions;

    /** @var string Человекопонятное название тарифного плана */
    public string $name;

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\TariffZone> Schema field tariffZones */
    public array $tariffZones;
}
