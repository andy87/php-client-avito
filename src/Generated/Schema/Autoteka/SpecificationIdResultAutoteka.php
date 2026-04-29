<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/SpecificationIdResultAutoteka.
 */
class SpecificationIdResultAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['specificationId' => 'specificationId'];

    protected const REQUIRED_FIELDS = ['specificationId'];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = [];

    /** @var int Идентификатор спецификации, по которому ее можно получить */
    public int $specificationId;
}
