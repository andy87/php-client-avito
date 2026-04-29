<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierAddress.
 */
class CreateParcelCourierAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'coordinates' => 'coordinates', 'details' => 'details'];

    protected const REQUIRED_FIELDS = ['addressRow', 'details', 'coordinates'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['coordinates' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates::class, 'details' => \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails::class];

    /** @var string Адрес, выбранный пользователем. */
    public string $addressRow;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates Schema field coordinates */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates $coordinates;

    /** @var \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails Schema field details */
    public \Andy87\ClientsAvito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails $details;
}
