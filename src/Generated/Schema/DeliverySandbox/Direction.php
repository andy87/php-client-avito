<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Direction.
 */
class Direction extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliveryProviderDirectionId' => 'deliveryProviderDirectionId', 'deliveryProviderTariffZoneId' => 'deliveryProviderTariffZoneId', 'directionTagFrom' => 'directionTagFrom', 'directionTagTo' => 'directionTagTo', 'maxTerm' => 'maxTerm', 'minTerm' => 'minTerm', 'name' => 'name', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['deliveryProviderDirectionId', 'name', 'type', 'directionTagFrom', 'directionTagTo', 'deliveryProviderTariffZoneId', 'minTerm', 'maxTerm'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Идентификатор направления доставки на стороне службы доставки */
    public string $deliveryProviderDirectionId;

    /** @var string Идентификатор [тарифной зоны](#tag/AvitoDeliveryTariffZone); ссылается на один из объектов в поле tariffZones */
    public string $deliveryProviderTariffZoneId;

    /** @var string Тэг направления адресных объектов (ПВЗ) из которых доступна доставка на условиях приведенных в данном направление */
    public string $directionTagFrom;

    /** @var string Тэг направления адресных объектов (ПВЗ) в которые доступна доставка на условиях приведенных в данном направление */
    public string $directionTagTo;

    /** @var int Максимальный срок доставки в рабочих днях */
    public int $maxTerm;

    /** @var int Минимальный срок доставки в рабочих днях */
    public int $minTerm;

    /** @var string Человекопонятное название направления (будет использоваться в интерфейсной части) */
    public string $name;

    /** @var string Тип объектов, которые связывает данное направление */
    public string $type;
}
