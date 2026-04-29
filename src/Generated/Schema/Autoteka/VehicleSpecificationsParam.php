<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/VehicleSpecificationsParam.
 */
class VehicleSpecificationsParam extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['key' => 'key', 'name' => 'name', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['key', 'name', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string ключ параметра */
    public string $key;

    /** @var string расшифровка ключа на русском */
    public string $name;

    /** @var string значение параметра */
    public string $value;
}
