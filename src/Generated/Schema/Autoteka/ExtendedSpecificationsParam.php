<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ExtendedSpecificationsParam.
 */
class ExtendedSpecificationsParam extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['id' => 'id', 'key' => 'key', 'name' => 'name', 'value' => 'value', 'valueId' => 'valueId'];

    protected const REQUIRED_FIELDS = ['key', 'name', 'value', 'id', 'valueId'];

    protected const NULLABLE_FIELDS = ['id', 'valueId'];

    protected const CASTS = [];

    /** @var int|null Идентификатор параметра из каталога Авито */
    public ?int $id;

    /** @var string ключ параметра */
    public string $key;

    /** @var string расшифровка ключа на русском */
    public string $name;

    /** @var string значение параметра */
    public string $value;

    /** @var int|null Идентификатор значения из каталога Авито */
    public ?int $valueId;
}
