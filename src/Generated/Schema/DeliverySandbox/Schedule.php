<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Schedule.
 */
class Schedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fri' => 'fri', 'mon' => 'mon', 'sat' => 'sat', 'sun' => 'sun', 'thu' => 'thu', 'tue' => 'tue', 'wed' => 'wed'];

    protected const REQUIRED_FIELDS = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fri' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'mon' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sat' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sun' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'thu' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'tue' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'wed' => \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field fri */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $fri;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field mon */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $mon;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sat */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sat;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sun */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sun;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field thu */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $thu;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field tue */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $tue;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field wed */
    public \php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $wed;
}
