<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelDeliveryCourier.
 */
class CreateParcelDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress::class, 'dateTimeInterval' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval::class, 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress|null Schema field address */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress $address = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval|null Schema field dateTimeInterval */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval $dateTimeInterval = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions $options = null;
}
