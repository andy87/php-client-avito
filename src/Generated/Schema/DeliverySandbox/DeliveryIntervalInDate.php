<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/DeliveryIntervalInDate.
 */
class DeliveryIntervalInDate extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['date' => 'date', 'intervals' => 'intervals'];

    protected const REQUIRED_FIELDS = ['date', 'intervals'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['intervals' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class];

    /** @var string дата доставки/забора */
    public string $date;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field intervals */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $intervals;
}
