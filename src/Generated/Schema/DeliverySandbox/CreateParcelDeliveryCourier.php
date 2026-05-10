<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelDeliveryCourier.
 */
class CreateParcelDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress::class, 'dateTimeInterval' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval::class, 'options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress|null Schema field address */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddress $address = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval|null Schema field dateTimeInterval */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierDateTimeInterval $dateTimeInterval = null;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions|null Schema field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierOptions $options = null;
}
