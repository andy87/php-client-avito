<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/PtsData.
 */
class PtsData extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['pts' => 'pts', 'sts' => 'sts'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<string, mixed>|null Данные ПТС */
    public ?array $pts = null;

    /** @var array<string, mixed>|null Данные СТС */
    public ?array $sts = null;
}
