<?php

declare(strict_types=1);

namespace php_client_avito\Generated\Schema\Autoteka;

use php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateSpecificationResponseDataAutoteka.
 */
class CreateSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specification' => 'specification'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['specification' => \php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka::class];

    /** @var \php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka|null Schema field specification */
    public ?\php_client_avito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka $specification = null;
}
