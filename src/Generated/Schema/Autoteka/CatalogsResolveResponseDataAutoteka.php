<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CatalogsResolveResponseDataAutoteka.
 */
class CatalogsResolveResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['fields' => 'fields'];

    protected const REQUIRED_FIELDS = ['fields'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['fields' => [\and_y87\php_client_avito\Generated\Schema\Autoteka\CatalogsFieldAutoteka::class]];

    /** @var array<int, \and_y87\php_client_avito\Generated\Schema\Autoteka\CatalogsFieldAutoteka> Schema field fields */
    public array $fields;
}
