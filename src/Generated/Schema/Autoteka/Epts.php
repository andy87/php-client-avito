<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Epts.
 */
class Epts extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['customsClearance' => 'customsClearance', 'customsRestrictions' => 'customsRestrictions', 'lastAction' => 'lastAction', 'otherRestrictions' => 'otherRestrictions', 'recyclingFee' => 'recyclingFee', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['type', 'status', 'recyclingFee', 'customsClearance', 'customsRestrictions', 'otherRestrictions', 'lastAction'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string Таможенное оформление */
    public string $customsClearance;

    /** @var string Таможенные ограничения */
    public string $customsRestrictions;

    /** @var string Последнее регистрационное действие */
    public string $lastAction;

    /** @var string Прочие ограничения */
    public string $otherRestrictions;

    /** @var string Утилизационный сбор */
    public string $recyclingFee;

    /** @var string Статус ЭПТС */
    public string $status;

    /** @var string Тип ЭПТС */
    public string $type;
}
