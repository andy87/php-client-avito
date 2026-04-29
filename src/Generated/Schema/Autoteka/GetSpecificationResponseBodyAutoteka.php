<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/GetSpecificationResponseBodyAutoteka.
 */
class GetSpecificationResponseBodyAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka|null Schema field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\GetSpecificationResponseDataAutoteka $result = null;
}
