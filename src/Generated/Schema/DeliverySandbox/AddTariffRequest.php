<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/AddTariffRequest.
 */
class AddTariffRequest extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderTariffId' => 'deliveryProviderTariffId', 'directions' => 'directions', 'name' => 'name', 'tariffZones' => 'tariffZones'];

    protected const REQUIRED_FIELDS = ['name', 'deliveryProviderTariffId', 'directions', 'tariffZones'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['directions' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Direction::class], 'tariffZones' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TariffZone::class]];

    /** @var string Идентификатор тарифного плана на стороне службы доставки - должен быть уникален.
 */
    public string $deliveryProviderTariffId;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Direction> Schema field directions */
    public array $directions;

    /** @var string Человекопонятное название тарифного плана */
    public string $name;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\TariffZone> Schema field tariffZones */
    public array $tariffZones;
}
