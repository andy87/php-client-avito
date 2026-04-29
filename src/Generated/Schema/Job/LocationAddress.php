<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/LocationAddress.
 */
class LocationAddress extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['area' => 'area', 'house' => 'house', 'locality' => 'locality', 'province' => 'province', 'region' => 'region', 'street' => 'street'];

    protected const REQUIRED_FIELDS = ['locality'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Район области */
    public ?string $area = null;

    /** @var string|null Номер дома */
    public ?string $house = null;

    /** @var string Населённый пункт */
    public string $locality;

    /** @var string|null Область */
    public ?string $province = null;

    /** @var string|null Округ */
    public ?string $region = null;

    /** @var string|null Улица */
    public ?string $street = null;
}
