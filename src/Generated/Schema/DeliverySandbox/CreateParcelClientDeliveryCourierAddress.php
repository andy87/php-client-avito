<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourierAddress.
 */
class CreateParcelClientDeliveryCourierAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'coordinates' => 'coordinates', 'details' => 'details'];

    protected const REQUIRED_FIELDS = ['addressRow', 'coordinates', 'details'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['coordinates' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates::class, 'details' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails::class];

    /** @var string Адрес, выбранный пользователем. */
    public string $addressRow;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates Schema field coordinates */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates $coordinates;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails Schema field details */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails $details;
}
