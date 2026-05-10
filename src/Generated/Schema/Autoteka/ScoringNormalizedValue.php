<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringNormalizedValue.
 */
class ScoringNormalizedValue extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['value' => 'value', 'valueId' => 'valueId'];

    protected const REQUIRED_FIELDS = ['value', 'valueId'];

    protected const NULLABLE_FIELDS = ['valueId'];

    protected const CASTS = [];

    /** @var string Schema field value */
    public string $value;

    /** @var int|null Идентификатор значения из каталога Авито */
    public ?int $valueId;
}
