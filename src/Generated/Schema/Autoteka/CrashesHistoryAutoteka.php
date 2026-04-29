<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CrashesHistoryAutoteka.
 */
class CrashesHistoryAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['additional' => 'additional', 'clearanceType' => 'clearanceType', 'damageMap' => 'damageMap', 'damageTypes' => 'damageTypes', 'date' => 'date', 'region' => 'region', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['additional', 'damageMap', 'damageTypes', 'date', 'region', 'type'];

    protected const NULLABLE_FIELDS = ['clearanceType'];

    protected const CASTS = [];

    /** @var array<int, string> Дополнительная информация */
    public array $additional;

    /** @var string|null Тип оформления */
    public ?string $clearanceType = null;

    /** @var array<int, string> Карта повреждения */
    public array $damageMap;

    /** @var array<int, array<string, mixed>> Степень повреждения для деталей */
    public array $damageTypes;

    /** @var int Дата в формате Unixtime */
    public int $date;

    /** @var string Регион ДТП */
    public string $region;

    /** @var string Тип ДТП */
    public string $type;
}
