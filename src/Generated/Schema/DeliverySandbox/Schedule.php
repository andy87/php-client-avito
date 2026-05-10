<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Schedule.
 */
class Schedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fri' => 'fri', 'mon' => 'mon', 'sat' => 'sat', 'sun' => 'sun', 'thu' => 'thu', 'tue' => 'tue', 'wed' => 'wed'];

    protected const REQUIRED_FIELDS = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fri' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'mon' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sat' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sun' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'thu' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'tue' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'wed' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field fri */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $fri;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field mon */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $mon;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sat */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sat;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sun */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sun;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field thu */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $thu;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field tue */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $tue;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field wed */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $wed;
}
