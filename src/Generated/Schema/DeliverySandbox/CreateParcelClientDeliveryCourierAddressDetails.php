<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\DeliverySandbox;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelClientDeliveryCourierAddressDetails.
 */
class CreateParcelClientDeliveryCourierAddressDetails extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['flat' => 'flat', 'floor' => 'floor', 'house' => 'house', 'porch' => 'porch'];

    protected const REQUIRED_FIELDS = ['house'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Номер квартиры. */
    public ?string $flat = null;

    /** @var string|null Номер этажа. */
    public ?string $floor = null;

    /** @var string Номер дома, корпуса, строения пользователя. */
    public string $house;

    /** @var string|null Номер подъезда. */
    public ?string $porch = null;
}
