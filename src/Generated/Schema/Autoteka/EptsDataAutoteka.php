<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/EptsDataAutoteka.
 */
class EptsDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['customsClearance' => 'customsClearance', 'customsRestrictions' => 'customsRestrictions', 'lastAction' => 'lastAction', 'otherRestrictions' => 'otherRestrictions', 'recyclingFee' => 'recyclingFee', 'status' => 'status', 'type' => 'type'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var string|null Таможенное оформление */
    public ?string $customsClearance = null;

    /** @var string|null Таможенные ограничения */
    public ?string $customsRestrictions = null;

    /** @var string|null Последнее регистрационное действие */
    public ?string $lastAction = null;

    /** @var string|null Прочие ограничения */
    public ?string $otherRestrictions = null;

    /** @var string|null Утилизационный сбор */
    public ?string $recyclingFee = null;

    /** @var string|null Статус ЭПТС */
    public ?string $status = null;

    /** @var string|null Тип ЭПТС */
    public ?string $type = null;
}
