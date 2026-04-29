<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\DeliverySandbox;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito delivery-sandbox/CreateParcelCourierAddressDetails.
 */
class CreateParcelCourierAddressDetails extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['flat' => 'flat', 'floor' => 'floor', 'house' => 'house', 'porch' => 'porch'];

    protected const REQUIRED_FIELDS = ['house', 'porch', 'floor', 'flat'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Номер квартиры. */
    public string $flat;

    /** @var string Номер этажа. */
    public string $floor;

    /** @var string Номер дома, корпуса, строения пользователя. */
    public string $house;

    /** @var string Номер подъезда. */
    public string $porch;
}
