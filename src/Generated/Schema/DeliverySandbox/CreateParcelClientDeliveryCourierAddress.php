<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourierAddress.
 */
class CreateParcelClientDeliveryCourierAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['addressRow' => 'addressRow', 'coordinates' => 'coordinates', 'details' => 'details'];

    protected const REQUIRED_FIELDS = ['addressRow', 'coordinates', 'details'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['coordinates' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates::class, 'details' => \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails::class];

    /** @var string Адрес, выбранный пользователем. */
    public string $addressRow;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates Schema field coordinates */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierCoordinates $coordinates;

    /** @var \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails Schema field details */
    public \php_client_avito\Generated\Schema\DeliverySandbox\CreateParcelClientDeliveryCourierAddressDetails $details;
}
