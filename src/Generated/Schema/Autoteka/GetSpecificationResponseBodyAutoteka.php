<?php

declare(strict_types=1);

namespace and_y87\php_client_avito\Generated\Schema\Autoteka;

use and_y87\php_client_avito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetSpecificationResponseBodyAutoteka.
 */
class GetSpecificationResponseBodyAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \and_y87\php_client_avito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka::class];

    /** @var \and_y87\php_client_avito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka|null Schema field result */
    public ?\and_y87\php_client_avito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka $result = null;
}
