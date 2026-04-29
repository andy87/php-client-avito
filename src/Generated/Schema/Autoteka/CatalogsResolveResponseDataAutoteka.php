<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CatalogsResolveResponseDataAutoteka.
 */
class CatalogsResolveResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fields' => 'fields'];

    protected const REQUIRED_FIELDS = ['fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fields' => [\Andy87\ClientsAvito\Generated\Schema\Autoteka\CatalogsFieldAutoteka::class]];

    /** @var array<int, \Andy87\ClientsAvito\Generated\Schema\Autoteka\CatalogsFieldAutoteka> Schema field fields */
    public array $fields;
}
