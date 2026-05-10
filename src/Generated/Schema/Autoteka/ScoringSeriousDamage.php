<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/ScoringSeriousDamage.
 */
class ScoringSeriousDamage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['relevanceDate' => 'relevanceDate', 'salvageCarAuctions' => 'salvageCarAuctions', 'value' => 'value'];

    protected const REQUIRED_FIELDS = ['relevanceDate', 'value'];

    protected const NULLABLE_FIELDS = ['salvageCarAuctions'];

    protected const CASTS = [];

    /** @var int Дата актуальности данных */
    public int $relevanceDate;

    /** @var array<string, mixed>|null Аукционы аварийных автомобилей */
    public ?array $salvageCarAuctions = null;

    /** @var bool Признак наличия серьезных повреждений */
    public bool $value;
}
