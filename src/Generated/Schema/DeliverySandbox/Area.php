<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Area.
 */
class Area extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliverySchedule' => 'deliverySchedule', 'directionTag' => 'directionTag', 'intakeSchedule' => 'intakeSchedule', 'providerAreaNumber' => 'providerAreaNumber', 'restrictions' => 'restrictions', 'services' => 'services', 'utcTimezone' => 'utcTimezone', 'zipCodes' => 'zipCodes'];

    protected const REQUIRED_FIELDS = ['directionTag', 'providerAreaNumber', 'services', 'utcTimezone', 'zipCodes', 'restrictions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['deliverySchedule' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule::class, 'directionTag' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class, 'intakeSchedule' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule::class, 'providerAreaNumber' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber::class, 'restrictions' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction::class, 'zipCodes' => [\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryZipCode::class]];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule|null Schema field deliverySchedule */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule $deliverySchedule = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule|null Schema field intakeSchedule */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CutoffAndSchedule $intakeSchedule = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber Schema field providerAreaNumber */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber $providerAreaNumber;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction Schema field restrictions */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\Restriction $restrictions;

    /** @var array<int, string> Доступные в области услуги. Забор (intake), доставка (delivery) */
    public array $services;

    /** @var string UTC зона области досатвки */
    public string $utcTimezone;

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryZipCode> список почтовых индексов входящих в данную зону доставки (область курьерской доставки/забора) */
    public array $zipCodes;
}
