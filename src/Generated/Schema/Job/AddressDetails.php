<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/AddressDetails.
 */
class AddressDetails extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['address' => 'address', 'coordinates' => 'coordinates', 'district' => 'district', 'location' => 'location', 'metro' => 'metro'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = ['address', 'district', 'location', 'metro'];

    protected const CASTS = ['coordinates' => \Andy87\ClientsAvito\Generated\Schema\Job\Coordinates::class];

    /** @var string|null Полный адрес */
    public ?string $address = null;

    /** @var \Andy87\ClientsAvito\Generated\Schema\Job\Coordinates|null Schema field coordinates */
    public ?\Andy87\ClientsAvito\Generated\Schema\Job\Coordinates $coordinates = null;

    /** @var string|null Название района */
    public ?string $district = null;

    /** @var string|null Название локации (региона или города) */
    public ?string $location = null;

    /** @var string|null Название станции метро */
    public ?string $metro = null;
}
