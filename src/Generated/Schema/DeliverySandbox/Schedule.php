<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/Schedule.
 */
class Schedule extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fri' => 'fri', 'mon' => 'mon', 'sat' => 'sat', 'sun' => 'sun', 'thu' => 'thu', 'tue' => 'tue', 'wed' => 'wed'];

    protected const REQUIRED_FIELDS = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fri' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'mon' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sat' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'sun' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'thu' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'tue' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class, 'wed' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field fri */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $fri;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field mon */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $mon;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sat */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sat;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field sun */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $sun;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field thu */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $thu;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field tue */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $tue;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals Schema field wed */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\DeliveryDayTimeIntervals $wed;
}
