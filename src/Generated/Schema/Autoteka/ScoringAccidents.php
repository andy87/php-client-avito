<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringAccidents.
 */
class ScoringAccidents extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['relevanceDate' => 'relevanceDate', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['relevanceDate', 'value'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Дата актуальности данных */
    public int $relevanceDate;

    /** @var bool Признак наличия ДТП */
    public bool $value;
}
