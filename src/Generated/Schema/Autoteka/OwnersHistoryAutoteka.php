<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/OwnersHistoryAutoteka.
 */
class OwnersHistoryAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['organisationName' => 'organisationName', 'owner' => 'owner', 'period' => 'period', 'region' => 'region', 'title' => 'title', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['owner', 'period', 'region', 'title', 'type'];

    protected const NULLABLE_FIELDS = ['organisationName'];

    protected const CASTS = [];

    /** @var string|null Название организации, в случае юрлица */
    public ?string $organisationName = null;

    /** @var string Владелец */
    public string $owner;

    /** @var string Период владения */
    public string $period;

    /** @var string Регион владения */
    public string $region;

    /** @var string Тип владельца текстом */
    public string $title;

    /** @var int Тип владельца `1` -  физлицо, `2` - юрлицо */
    public int $type;
}
