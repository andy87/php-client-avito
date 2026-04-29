<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryIntervalInDate.
 */
class DeliveryIntervalInDate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'intervals' => 'intervals'];

    protected const REQUIRED_FIELDS = ['date', 'intervals'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['intervals' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class];

    /** @var string дата доставки/забора */
    public string $date;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field intervals */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $intervals;
}
