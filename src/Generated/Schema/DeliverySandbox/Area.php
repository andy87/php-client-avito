<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Area.
 */
class Area extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['deliverySchedule' => 'deliverySchedule', 'directionTag' => 'directionTag', 'intakeSchedule' => 'intakeSchedule', 'providerAreaNumber' => 'providerAreaNumber', 'restrictions' => 'restrictions', 'services' => 'services', 'utcTimezone' => 'utcTimezone', 'zipCodes' => 'zipCodes'];

    protected const REQUIRED_FIELDS = ['directionTag', 'providerAreaNumber', 'services', 'utcTimezone', 'zipCodes', 'restrictions'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['deliverySchedule' => \php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule::class, 'directionTag' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag::class, 'intakeSchedule' => \php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule::class, 'providerAreaNumber' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber::class, 'restrictions' => \php_client_avito\Generated\Schema\DeliverySandbox\Restriction::class, 'zipCodes' => [\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryZipCode::class]];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule|null Schema field deliverySchedule */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule $deliverySchedule = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag Schema field directionTag */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDirectionTag $directionTag;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule|null Schema field intakeSchedule */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CutoffAndSchedule $intakeSchedule = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber Schema field providerAreaNumber */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryProviderAreaNumber $providerAreaNumber;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\Restriction Schema field restrictions */
    public \php_client_avito\Generated\Schema\DeliverySandbox\Restriction $restrictions;

    /** @var array<int, string> Доступные в области услуги. Забор (intake), доставка (delivery) */
    public array $services;

    /** @var string UTC зона области досатвки */
    public string $utcTimezone;

    /** @var array<int, \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryZipCode> список почтовых индексов входящих в данную зону доставки (область курьерской доставки/забора) */
    public array $zipCodes;
}
