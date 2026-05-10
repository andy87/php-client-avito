<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourier.
 */
class CreateParcelClientDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider', 'address', 'dateTimeInterval'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress::class, 'dateTimeInterval' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval::class, 'options' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions::class];

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress Schema field address */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress $address;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval Schema field dateTimeInterval */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval $dateTimeInterval;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions|null Schema field options */
    public ?\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions $options = null;

    /** @var string Cлужба доставки, которая будет осуществлять курьерскую доставку. */
    public string $provider;
}
