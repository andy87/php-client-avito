<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourier.
 */
class CreateParcelClientDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider', 'address', 'dateTimeInterval'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress::class, 'dateTimeInterval' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval::class, 'options' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress Schema field address */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress $address;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval Schema field dateTimeInterval */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval $dateTimeInterval;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions|null Schema field options */
    public ?\and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions $options = null;

    /** @var string Cлужба доставки, которая будет осуществлять курьерскую доставку. */
    public string $provider;
}
