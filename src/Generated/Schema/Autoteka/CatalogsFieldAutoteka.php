<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CatalogsFieldAutoteka.
 */
class CatalogsFieldAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['dataType' => 'dataType', 'id' => 'id', 'label' => 'label', 'values' => 'values'];

    protected const REQUIRED_FIELDS = ['id', 'label', 'dataType', 'values'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Тип значения параметра */
    public string $dataType;

    /** @var int Идентификатор параметра */
    public int $id;

    /** @var string Название параметра */
    public string $label;

    /** @var array<int, array<string, mixed>> Schema field values */
    public array $values;
}
