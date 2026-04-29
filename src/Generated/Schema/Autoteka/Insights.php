<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/Insights.
 */
class Insights extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['isImported' => 'isImported'];

    protected const REQUIRED_FIELDS = ['isImported'];

    protected const NULLABLE_FIELDS = ['isImported'];

    protected const CASTS = [];

    /** @var bool|null Флаг ввоза авто из-за рубежа */
    public ?bool $isImported;
}
