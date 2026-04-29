<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/DiagnosticsEventDamage.
 */
class DiagnosticsEventDamage extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['degree' => 'degree', 'part' => 'part', 'photoUrl' => 'photoUrl', 'type' => 'type'];

    protected const REQUIRED_FIELDS = ['part', 'type', 'degree', 'photoUrl'];

    protected const NULLABLE_FIELDS = ['degree', 'photoUrl'];

    protected const CASTS = [];

    /** @var string|null Степень повреждения */
    public ?string $degree;

    /** @var string З/ч с повреждением */
    public string $part;

    /** @var string|null Ссылка на фото с повреждением */
    public ?string $photoUrl;

    /** @var string Описание повреждения */
    public string $type;
}
