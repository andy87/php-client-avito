<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateSpecificationResponseDataAutoteka.
 */
class CreateSpecificationResponseDataAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specification' => 'specification'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['specification' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka|null Schema field specification */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\SpecificationIdResultAutoteka $specification = null;
}
