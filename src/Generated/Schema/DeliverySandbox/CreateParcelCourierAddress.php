<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierAddress.
 */
class CreateParcelCourierAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'coordinates' => 'coordinates', 'details' => 'details'];

    protected const REQUIRED_FIELDS = ['addressRow', 'details', 'coordinates'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['coordinates' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates::class, 'details' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails::class];

    /** @var string Адрес, выбранный пользователем. */
    public string $addressRow;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates Schema field coordinates */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierCoordinates $coordinates;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails Schema field details */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelCourierAddressDetails $details;
}
