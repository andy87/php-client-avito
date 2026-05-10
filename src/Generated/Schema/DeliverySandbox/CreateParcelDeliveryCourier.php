<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelDeliveryCourier.
 */
class CreateParcelDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress::class, 'dateTimeInterval' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval::class, 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress|null Schema field address */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress $address = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval|null Schema field dateTimeInterval */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval $dateTimeInterval = null;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions $options = null;
}
