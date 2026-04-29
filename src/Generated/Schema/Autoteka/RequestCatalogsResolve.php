<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/RequestCatalogsResolve.
 */
class RequestCatalogsResolve extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fieldsValueIds' => 'fieldsValueIds'];

    protected const REQUIRED_FIELDS = ['fieldsValueIds'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var array<int, array<string, mixed>> Выбранные значения параметров */
    public array $fieldsValueIds;
}
