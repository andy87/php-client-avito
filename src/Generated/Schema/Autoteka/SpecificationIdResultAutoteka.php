<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

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
