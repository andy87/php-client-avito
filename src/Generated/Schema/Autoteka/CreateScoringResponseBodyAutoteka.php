<?php

declare(strict_types=1);

namespace Andy87\ClientsAvito\Generated\Schema\Autoteka;

use Andy87\ClientsAvito\Schema\AbstractSchemaModel;

/**
 * OpenAPI schema модель Avito autoteka/CreateScoringResponseBodyAutoteka.
 */
class CreateScoringResponseBodyAutoteka extends AbstractSchemaModel
{
    protected const FIELD_MAP = ['result' => 'result'];

    protected const REQUIRED_FIELDS = [];

    protected const NULLABLE_FIELDS = [];

    protected const CASTS = ['result' => \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka::class];

    /** @var \Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka|null Schema field result */
    public ?\Andy87\ClientsAvito\Generated\Schema\Autoteka\CreateScoringResponseDataAutoteka $result = null;
}
