<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateSpecificationResponseDataAutoteka.
 */
class CreateSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specification' => 'specification'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['specification' => \and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka|null Schema field specification */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka $specification = null;
}
