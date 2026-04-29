<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Job;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito job/Phone.
 */
class Phone extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['city' => 'city', 'country' => 'country', 'number' => 'number'];

    protected const REQUIRED_FIELDS = ['country', 'city', 'number'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Код города (строка, соответствующая шаблону "^\\d{0,6}$") */
    public string $city;

    /** @var string Код страны (строка, соответствующая шаблону "^\\+?\\d{0,5}$") */
    public string $country;

    /** @var string Телефон (строка, соответствующая шаблону "^[\\d -]{4,32}$") */
    public string $number;
}
