<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\DeliverySandbox;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierAddress.
 */
class CreateParcelCourierAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'coordinates' => 'coordinates', 'details' => 'details'];

    protected const REQUIRED_FIELDS = ['addressRow', 'details', 'coordinates'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['coordinates' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates::class, 'details' => \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails::class];

    /** @var string Адрес, выбранный пользователем. */
    public string $addressRow;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates Schema field coordinates */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates $coordinates;

    /** @var \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails Schema field details */
    public \and_y87\php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails $details;
}
