<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourier.
 */
class CreateParcelClientDeliveryCourier extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'dateTimeInterval' => 'dateTimeInterval', 'options' => 'options', 'provider' => 'provider'];

    protected const REQUIRED_FIELDS = ['provider', 'address', 'dateTimeInterval'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['address' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress::class, 'dateTimeInterval' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval::class, 'options' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress Schema field address */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddress $address;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval Schema field dateTimeInterval */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierDateTimeInterval $dateTimeInterval;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions|null Schema field options */
    public ?\Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierOptions $options = null;

    /** @var string Cлужба доставки, которая будет осуществлять курьерскую доставку. */
    public string $provider;
}
